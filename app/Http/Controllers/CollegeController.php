<?php

namespace App\Http\Controllers;

use App\models\College;
use Illuminate\Http\Request;
use App\models\State;
use App\models\City;


class CollegeController extends Controller
{

    public function index()
    {

        $colleges=College::all();
        return view('admin.colleges.index',compact('colleges'));

    }


    public function create()
    {
        $state=State::pluck('name', 'id');
        $city=City::pluck('name', 'id');
        return view('admin.colleges.create',compact('state','city'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'institute_name' => 'required',


        ]);
        //
        $input=$request->all();
        if($file = $request->file('photo'))
        {
            $name = $file->getClientOriginalName();
            $file->move('public/backend/images/colleges', $name);
            //  $photo = Photo::create(['file'=>$name]);
            $input['photo'] = $name;
        }
        $colleges=new College();
        $colleges->create($input);
        return redirect('/admin/colleges');
    }


    public function show(College $college)
    {
        //
    }


    public function edit(College $id)
    {
        $college=College::findOrFail($id);
        $state=State::pluck('name', 'id');
        $city=City::pluck('name', 'id');
        return view('admin.colleges.edit',compact('state','city','college'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'institute_name' => 'required',
        ]);
        $input=$request->all();
        if($file = $request->file('photo'))
        {
            $name = $file->getClientOriginalName();
            $file->move('public/backend/images/colleges', $name);
            //  $photo = Photo::create(['file'=>$name]);
            $input['photo'] = $name;
        }
        Mpmla::whereId($id)->first()->update($input);
        return redirect('/admin/colleges');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function destroy(College $id)
    {

        $college = College::findOrFail($id);

        $college->delete();

        return redirect('/admin/colleges');
    }
}
