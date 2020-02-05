<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Author;
use App\Product;
use App\RentHistory;

class DataController extends Controller
{
    public function authors()
    {
        $authors = Author::orderBy('name', 'ASC');
        return datatables()->of($authors)
                ->addColumn('action','admin.author.action')
                ->addIndexColumn()
                // ->rawColumns(['action'])
                ->toJson();
    }

    public function products()
    {
        $products = Product::orderBy('title', 'ASC');
        return datatables()->of($products)
                ->addColumn('author', function(Product $model){
                    return $model->author->name;
                })
                ->editColumn('image', function(Product $model){
                    return '<img src="'. $model->getImage() .'" width="100px 0px 150px 0px">';
                })
                ->addColumn('action','admin.product.action')
                ->addIndexColumn()
                ->rawColumns(['image', 'action'])
                ->toJson();
    }
 

    public function rents()
    {
        $rents = RentHistory::isRented()->latest();
        return datatables()->of($rents)            
            ->addColumn('user', function(RentHistory $model){
                return $model->user->name;
            })

            ->addColumn('product_title', function(RentHistory $model){
                return $model->product->title;
            })
            ->addColumn('action', 'admin.rent.action')            
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }
}
 