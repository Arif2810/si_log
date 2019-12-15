<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Data;
use App\Machine;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $machines = Machine::all();
        $datas = Data::orderBy('id_data', 'DESC')->get();
        return view('admin.data.index', ['datas'=>$datas, 'machines'=>$machines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create(){

    //     $datas = Data::all();
    //     return view('admin.data.create', ['datas'=>$datas]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

      $datas = new Data;
      $datas->tgl_input = $request->tgl_input;
      $datas->id_data   = $request->id_data;
      $datas->id_mesin  = $request->id_mesin;
      $datas->oversize_i   = round($request->oversize_i, 1);
      $datas->overthick_i   = round($request->overthick_i, 1);
      $datas->largeaccept_i = round($request->largeaccept_i, 1);
      $datas->smallaccept_i = round($request->smallaccept_i, 1);
      $datas->pin_i         = round($request->pin_i, 1);
      $datas->dust_i        = round($request->dust_i, 1);
      $datas->bark_i        = round($request->bark_i, 1);

      // Memasukkan nilai Over Size
      $oversize = $request->oversize_i/($request->oversize_i + $request->overthick_i + $request->largeaccept_i + $request->smallaccept_i + $request->pin_i + $request->dust_i + $request->bark_i) * 100;
      $datas->oversize  = round($oversize, 1);

      // Memasukkan nilai Over Thick
      $overthick = $request->overthick_i/($request->oversize_i + $request->overthick_i + $request->largeaccept_i + $request->smallaccept_i + $request->pin_i + $request->dust_i + $request->bark_i) * 100;
      $datas->overthick  = round($overthick, 1);

      // Memasukkan nilai Large Accept
      $largeaccept = $request->largeaccept_i/($request->oversize_i + $request->overthick_i + $request->largeaccept_i + $request->smallaccept_i + $request->pin_i + $request->dust_i + $request->bark_i) * 100;
      $datas->largeaccept  = round($largeaccept, 1);

      // Memasukkan nilai Small Accept
      $smallaccept = $request->smallaccept_i/($request->oversize_i + $request->overthick_i + $request->largeaccept_i + $request->smallaccept_i + $request->pin_i + $request->dust_i + $request->bark_i) * 100;
      $datas->smallaccept  = round($smallaccept, 1);

      // Memasukkan Total Accept
      $totalaccept = $datas->largeaccept + $datas->smallaccept;
      $datas->totalaccept = round($totalaccept, 1);

      // Memasukkan nilai pin
      $pin = $request->pin_i/($request->oversize_i + $request->overthick_i + $request->largeaccept_i + $request->smallaccept_i + $request->pin_i + $request->dust_i + $request->bark_i) * 100;
      $datas->pin  = round($pin, 1); 

      // Memasukkan Dust
      $dust = $request->dust_i/($request->oversize_i + $request->overthick_i + $request->largeaccept_i + $request->smallaccept_i + $request->pin_i + $request->dust_i + $request->bark_i) * 100;
      $datas->dust  = round($dust, 1); 

      // Memasukkan Bark
      $bark = $request->bark_i/($request->oversize_i + $request->overthick_i + $request->largeaccept_i + $request->smallaccept_i + $request->pin_i + $request->dust_i + $request->bark_i) * 100;
      $datas->bark  = round($bark, 1); 

      $datas->save();
      // dd('kesini');

      return redirect('data')->with('pesan', 'Data berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_data)
    {
        $data = Data::find($id_data);
        return view('admin.data.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_data){
        
        $datas = Data::findOrFail($id_data);
        return view('admin/data/edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_data){
        
      $datas = Data::find($id_data);
      $datas->angka1           = $request->angka1;
      $datas->angka2 = $request->angka2;

      $datas->save();
      return redirect('data')->with('pesan', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){

      $datas = Data::find($request->id_data);
      $datas->delete();
      return back()->with('pesan', 'Data berhasil dihapus');
  }
}
