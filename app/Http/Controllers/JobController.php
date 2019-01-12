<?php

namespace App\Http\Controllers;

use App\models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('apply');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'f_name' => 'required',
            'gender' => 'required',
        ]);
        //
        $input=$request->all();
        if($file = $request->file('photo'))
        {
            $name = $file->getClientOriginalName();
            $file->move('public/backend/images/applicants', $name);
            //  $photo = Photo::create(['file'=>$name]);
            $input['photo'] = $name;
        }
        $applications=new Job();
        $applications->create($input);
        return redirect('/success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
