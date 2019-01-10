<?php

namespace App\Http\Controllers;

use App\models\City;
use App\models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        ::with('category')->find();
        $cities=City::all();
        return view('admin.city.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $state=State::pluck('name', 'id');
        return view('admin.city.create',compact('state'));
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
            'state_id' => 'required',

        ]);
        //
        $input=$request->all();

        $city=new City();
        $city->create($input);
        return redirect('/admin/city');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $state=State::pluck('name', 'id');
        $city=City::findOrFail($id);
        return view('admin.city.edit',compact('state','city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'state_id'=>'required'
        ]);
        $input=$request->all();
        City::whereId($id)->first()->update($input);
        return redirect('/admin/city');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        return redirect('/admin/city');
    }
}
