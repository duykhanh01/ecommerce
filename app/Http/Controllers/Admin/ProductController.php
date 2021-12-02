<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Size;
use App\Models\Tags;
use App\Models\Category;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $color = Color::all();
        $size = Size::all();
        $tag = Tags::all();
        $category = Category::all();
        return view('admin.products', ['colors' => $color, 'sizes' => $size, 'tags'=> $tag, 'categories' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        //return $request->pr_name;
        $userId = auth()->id();
        $pr_name = $request->pr_name;
        $pr_description = $request->pr_desc;
        $pr_category = $request->category;
        $pr_quantity = $request->pr_quantity;
        $pr_price = $request->pr_price;
        $pr_discount = $request->pr_discount;
        $pr_color = $request->color;
        $pr_size = $request->size;
        $product = new Product();
        $product->users_id = $userId;
        $product->pr_name = $pr_name;
        $product->pr_des = $pr_description;
        $product->pr_quantity = $pr_quantity;
        $product->pr_price = $pr_price;
        $product->pr_discount = $pr_discount;
        $product->save();
        
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
