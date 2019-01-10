<?php

namespace App\Http\Controllers;

use App\models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads=Ads::all();
        return view('admin.ads.index',compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ads.create');
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
            $file->move('public/backend/images/ads', $name);

            $input['image'] = $name;
        }
        $ads=new Ads();
        $ads->create($input);
        return redirect('/admin/ads');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(Ads $ads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ads = Ads::findOrFail($id);
        return view('admin.ads.edit',compact('ads'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'location' => 'required',

        ]);
        $input=$request->all();
        if($file = $request->file('image'))
        {
            $name = $file->getClientOriginalName();
            $file->move('public/backend/images/ads', $name);
            //  $photo = Photo::create(['file'=>$name]);
            $input['image'] = $name;
        }
        Ads::whereId($id)->first()->update($input);
        return redirect('/admin/ads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ads = Event::findOrFail($id);

//        unlink( "public/backend/images/ads". $ads->image);

        $ads->delete();

        return redirect('/admin/ads');
    }
}
