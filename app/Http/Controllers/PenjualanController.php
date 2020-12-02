<?php

namespace App\Http\Controllers;

use App\Penjualan;
use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \DB;
class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = DB::table('penjualans')
            ->join('barangs', 'penjualans.kode_barang', '=', 'barangs.id')
            ->get();
        //$penjualan = Penjualan::all();
        return view('penjualan.index',compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        return view('penjualan.create',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'no_faktur'=>'required|unique:penjualans'
        ]);
        $id = $request->kode_barang;
        $barang = Barang::find($id);
        $xharga_satuan = $barang['harga_jual'];
        $xharga_total = $xharga_satuan * $request->jumlah;

        Penjualan::create([
            'tgl_faktur'=>$request->tgl_faktur,
            'no_faktur'=>$request->no_faktur,
            'nama_konsumen'=>$request->nama_konsumen,
            'kode_barang'=>$request->kode_barang,
            'jumlah'=>$request->jumlah,
            'harga_satuan'=>$xharga_satuan,
            'harga_total'=>$xharga_total
        ]);
        return redirect(route('penjualan'))->with('success','ADDED');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = Penjualan::find($id)->delete();
        return redirect(route('penjualan'));
    }
}
