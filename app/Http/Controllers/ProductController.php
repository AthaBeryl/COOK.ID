<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);

        return view('index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function land()
    {
        $products = Product::all();
        return view('welcome',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required',
        ]);
        $imageName = time().'.'.$request->gambar->getClientOriginalExtension();
        $request->gambar->move(public_path('image'), $imageName);
        Product::create([
            'name' => $request->name,
            'detail' =>  $request->detail,
            'kategori' =>  $request->kategori,
            'stok' =>  $request->stok,
            'harga' =>  $request->harga,
            'gambar' => $imageName
        ]);

        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required',
        ]);
        if($request->gambar == null){
        $product->update([
            'name' => $request->name,
            'detail' =>  $request->detail,
            'kategori' =>  $request->kategori,
            'stok' =>  $request->stok,
            'harga' =>  $request->harga,

        ]);
        }else{
            $imageName = time().'.'.$request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path('image'), $imageName);
        $product->update([
            'name' => $request->name,
            'detail' =>  $request->detail,
            'kategori' =>  $request->kategori,
            'stok' =>  $request->stok,
            'harga' =>  $request->harga,
            'gambar' => $imageName
        ]);
        }
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
