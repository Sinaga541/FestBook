<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Author;
use App\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index', [
            'title' => 'Data Buku',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create', [
            'title' => 'Tambah Produk',
            'authors' => Author::orderBy('name', 'ASC')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required|min:20',
            'author_id' => 'required',
            'image' => 'file|image',
            'jumlah' => 'required|numeric'
        ]);

        $image = null;

        if($request->hasFile('image')){
            $image = $request->file('image')->store('assets/covers');
        }

        Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
            'image' => $image,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('admin.product.index')->withSuccess('Data Produk berhasil ditambahkan');
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
    public function edit(Product $product)
    {
        return view('admin.product.edit',[
            'title' => 'Ubah Data Produk',
            'product' => $product,
            'authors' => Author::orderBy('name', 'ASC')->get(),
        ]);
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required|min:20',
            'author_id' => 'required',
            'image' => 'file|image',
            'jumlah' => 'required|numeric'
        ]);

        $image = $product->image;

        if($request->hasFile('image')){
            Storage::delete($product->image);
            $image = $request->file('image')->store('assets/covers');
        }

        $product->update([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
            'image' => $image,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('admin.product.index')->withSuccess('Data Produk berhasil diUpdate');
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

        return redirect()->route('admin.product.index')->withDanger('Data Product Berhasil di Hapus');
    }
}
