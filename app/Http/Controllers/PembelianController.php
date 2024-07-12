<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = 'title';
        return view('dashboard.data_pembelian',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form_beli');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    //Proses Faktur Pembelian
    public function create_faktur()
    {
        return view('dashboard.form_fakturpembelian');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_faktur(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show_faktur(string $id)
    {
        return view('dashboard.detail_fakturpembelian');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_faktur(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_faktur(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_faktur(string $id)
    {
        //
    }
}
