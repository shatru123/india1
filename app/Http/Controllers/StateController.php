<?php

namespace App\Http\Controllers;

use App\models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states=State::all();
        return view('admin.state.index',compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.state.create');
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

        ]);
        //
        $input=$request->all();

        $states=new State();
        $states->create($input);
        return redirect('/admin/state');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $state=State::findOrFail($id);
        return view('admin.state.edit',compact('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',

        ]);
        $input=$request->all();

        State::whereId($id)->first()->update($input);
        return redirect('/admin/state');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = State::findOrFail($id);
        $state->delete();
        return redirect('/admin/state');
    }
}
