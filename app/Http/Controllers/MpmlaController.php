<?php

namespace App\Http\Controllers;

use App\models\City;
use App\models\Mpmla;
use App\models\State;
use Illuminate\Http\Request;

class MpmlaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mpmla=Mpmla::all();
        return view('admin.mpmla.index',compact('mpmla'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $state=State::pluck('name', 'id');
        $city=City::pluck('name', 'id');
        return view('admin.mpmla.create',compact('state','city'));
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
            'name' => 'required',
            'gender' => 'required',
            'type' => 'required',
            'city_id' => 'required',

        ]);
        //
        $input=$request->all();
        if($file = $request->file('photo'))
        {
            $name = $file->getClientOriginalName();
            $file->move('public/backend/images/leaders', $name);
            //  $photo = Photo::create(['file'=>$name]);
            $input['photo'] = $name;
        }
        $leaders=new Mpmla();
        $leaders->create($input);
        return redirect('/admin/mpmla');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Mpmla  $mpmla
     * @return \Illuminate\Http\Response
     */
    public function show(Mpmla $mpmla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Mpmla  $mpmla
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leader=Mpmla::findOrFail($id);
        $state=State::pluck('name', 'id');
        $city=City::pluck('name', 'id');
        return view('admin.mpmla.edit',compact('state','city','leader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Mpmla  $mpmla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'type' => 'required',
            'city_id' => 'required',

        ]);
        $input=$request->all();
        if($file = $request->file('photo'))
        {
            $name = $file->getClientOriginalName();
            $file->move('public/backend/images/leaders', $name);
            //  $photo = Photo::create(['file'=>$name]);
            $input['photo'] = $name;
        }
        Mpmla::whereId($id)->first()->update($input);
        return redirect('/admin/mpmla');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Mpmla  $mpmla
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leader = Mpmla::findOrFail($id);

//        unlink( "public/backend/images/leaders". $leader->photo);

        $leader->delete();

        return redirect('/admin/mpmla');
    }
}






