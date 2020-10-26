<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Department;


class PositionController extends Controller
{

    public function index()
    {
        $data = Position::all();
        return view('position.home', [
        'data' => $data
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('position.create',[
            'department'=>$department
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'name' => 'required|min:5|unique:positions,name'
        ]);

        // Allowing Mass Assignment
        Position::create([
            'name'=>$request->name,
            'department_id'=>$request->department_id
        ]);

        return redirect('/position');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Position::find($id);
        $department = Department::all();
        return view('position.edit', [
            'data'=> $data,
            'department'=> $department
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Position::where('id', '=',$request->id)->update([
            'name'=>$request->name,
            'department_id'=>$request->department_id
        ]);

        return redirect('/position');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Position::find($id);
        $data->delete();

        return redirect('/position');

    }
}
