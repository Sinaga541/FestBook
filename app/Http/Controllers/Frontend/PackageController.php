<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Http\Controllers\Frontend\RentHistory;

class PackageController extends Controller
{
    
    public function index(){
        $products = Product::paginate(10);
        return view('frontend.package.package1', [
            'title' => 'Dashboard FestBook',
            'products' => $products,
        ]);
            
    }

    public function show(Product $product)
    {
        return view('frontend.product.show', [
            'title' => $product -> title,
            'product' => $product,
        ]);
    }

    public function rent(Product $product)
    {
        $user = auth()->user();

       $user->rent()->attach($product);
       $product->decrement('jumlah');

        return redirect()->back()->with('toast', 'Berhasil Memesan Package'); 
    }
}
