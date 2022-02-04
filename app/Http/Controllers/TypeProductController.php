<?php

namespace App\Http\Controllers;

use App\Models\TypeProduct;
use Illuminate\Http\Request;

class TypeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeproduct = TypeProduct::get();
        return view('typeproduct.index', compact('typeproduct'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $isEdit = false;
        return view('typeproduct.type', compact('isEdit'));
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
            'type_product' => 'required',
        ]);

        TypeProduct::create($request->all());
        return redirect('typeproduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeProduct  $typeProduct
     * @return \Illuminate\Http\Response
     */
    public function show(TypeProduct $typeProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeProduct  $typeProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeProduct $typeProduct)
    {
        $isEdit = true;
        return view('typeproduct.index', compact('typeproduct', 'isEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeProduct  $typeProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeProduct $typeProduct)
    {
        $typeProduct->update($request->all);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeProduct  $typeProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeProduct $typeProduct)
    {
        $typeProduct->delete();
        return back();
    }
}
