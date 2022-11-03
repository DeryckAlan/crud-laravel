<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	return view('welcome', compact('products'));
    }

    public function prodform()
    {
        return view('post');
    }

    public function insert(Request $request)
    {
    	$prod = new Product();

    	$prod->name = $request->input('prodname');
    	$prod->slug = $request->input('slug');
    	$prod->amout = $request->input('amout');
    	$prod->price = $request->input('price');

    	$prod->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $prod = Product::find($id);
        return view('edit', compact('prod'));      
    }

    public function update(Request $request, $id)
    {
        $prod = Product::find($id);

        $prod->name = $request->input('prodname');
        $prod->slug = $request->input('slug');
        $prod->amout = $request->input('amout');
        $prod->price = $request->input('price');

        $prod->update();

        return redirect('/');
    }

    public function destroy($id)
    {
        $prod = Product::find($id);
        $prod->delete();

        return redirect('/');
    }
}
