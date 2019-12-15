<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Machine;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $machines = Machine::all(); 
        return view('admin.machine.index', ['machines'=>$machines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_mesin' => 'required',
        ]);

        $machines = new Machine;
        $machines->id_mesin   = $request->id_mesin;
        $machines->nama_mesin = $request->nama_mesin;
        $machines->save();
        // dd('kesini');

        return redirect('machine')->with('pesan', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
        
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_mesin){

        $machines = Machine::find($id_mesin);
        return view('admin/machine/edit', compact('machines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_mesin){

        $this->validate($request, [
            'nama_mesin' => 'required',
        ]);

        $machines = Machine::find($id_mesin);
        $machines->nama_mesin = $request->nama_mesin;
        $machines->save();
        return redirect('machine')->with('pesan', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $machines = Machine::find($request->id_mesin);
        $machines->delete();
        return back()->with('pesan', 'Data berhasil dihapus');
    }
}
