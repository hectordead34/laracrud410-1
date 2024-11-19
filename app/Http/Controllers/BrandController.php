<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::get();
        return view('Dashboard/brands/show', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard/brands/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Brand::create($request->all());
        return to_route('products.index')->with('status', 'Marca Registrada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        
        return view('Dashboard/brands/show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        echo view ('Dashboard/brands/edit',compact('brand',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $brand->update($request->all());//actualizamos los datos en la base de datos
        return to_route('brands.index') -> with ('status' , 'Marca Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return to_route('brands.index')->with('status', 'Marca Eliminada');
    }
}
