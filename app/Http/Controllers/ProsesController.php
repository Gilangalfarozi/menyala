<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kalkulator.inputangka');
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
        //
        $a=$request->angka1;
        $b=$request->angka2;
        $op=$request->op;

        if($op=='Tambah'){
            $hasil=$a+$b;
        }elseif($op=='Kurang'){
            $hasil=$a-$b;
        }elseif($op=='Kali'){
            $hasil=$a*$b;
        }elseif($op=='Bagi'){
        if ($b != 0){    
            $hasil=$a/$b;
        }else{
            $hasil = 'Error: Pembagian oleh nol tidak diizinkan';
        }
    }else{    
             return view('kalkulator.inputangka');
        }

        return view('kalkulator.hasil', compact('hasil'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
