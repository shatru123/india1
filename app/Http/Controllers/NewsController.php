<?php

namespace App\Http\Controllers;

use App\models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newss=News::all();
        return view('admin.news.index',compact('newss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',

            'location' => 'required',

        ]);
        //
        $input=$request->all();
        if($file = $request->file('image'))
        {
            $name = $file->getClientOriginalName();
            $file->move('public/backend/images/news', $name);

            $input['image'] = $name;
        }
        $news=new News();
        $news->create($input);
        return redirect('/admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',

            'location' => 'required',

        ]);
        $input=$request->all();
        if($file = $request->file('image'))
        {
            $name = $file->getClientOriginalName();
            $file->move('public/backend/images/news', $name);
            //  $photo = Photo::create(['file'=>$name]);
            $input['image'] = $name;
        }
        News::whereId($id)->first()->update($input);
        return redirect('/admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);

//        unlink( "public/backend/images/news". $news->image);

        $news->delete();

        return redirect('/admin/news');
    }
}
