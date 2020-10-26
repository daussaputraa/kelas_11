<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Archive;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Inventory::all();
        return view('inventory.home', [
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
        return view('inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        // dd($request);

        Inventory::create([
            'name'=>$req->name,
            'detail'=>$req->detail
        ]);

        // $insertId = $inventory->id;
        // dd($insertId);

        $last_inventory = Inventory::where('name', $req->name)->get()->last();

        //dd($last_inventory);
        Archive::create([
            'inventory_id' => $last_inventory->id,
            'name' => $req->archive_name,
            'detail'=>$req->archive_detail
        ]);

        return redirect('/inventory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Inventory::find($id);
        return view('inventory.show', [
            'data'=> $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Inventory::find($id);
        return view('inventory.edit', [
            'data'=> $data
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
        Inventory::where('id', '=',$request->id)->update([
            'name'=>$request->name,
            'detail'=>$request->detail
        ]);

        return redirect('/inventory');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Inventory::find($id);
        $data->delete();

        return redirect('/inventory');

    }
}
