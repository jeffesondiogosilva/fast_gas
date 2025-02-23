<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('panel.products.index')->with('products', $products);
    }   
    public function create()
    {
        return view('panel.products.create');
    }   
    public function edit()
    {
        return view('panel.products.create');
    }   
    public function store(Request $request)
    {
        
        $dados = $request->all();        
        Product::create($dados);

        return view('panel.products.create');
    }   
    public function update()
    {
        return view('panel.products.create');
    }   
    public function delete()
    {
        return view('panel.products.create');
    }   

}
