<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    
    public function index()
    {
        return view('admin.dasboard');
    }

    public function show_postingan()
    {
        return view('admin.postingan');
    }

    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function show_data()
    {
        return view('admin.data');
    }

    public function show_produk()
    {
        return view('admin.produk');
    }

    public function show_kontak()
    {
        return view('admin.kontak');
    }


    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        
    }

   
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
}
