<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Size;
use App\Models\Tags;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductOptionColor;
use App\Models\ProductOptionSize;
use App\Models\Cates;
use App\Models\TagPr;


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
        $pr_colors = $request->color;
        $pr_size = $request->size;
        $pr_tags = $request->pr_tags;
        $product = new Product();
        $product->users_id = $userId;
        $product->pr_name = $pr_name;
        $product->pr_des = $pr_description;
        $product->pr_quantity = $pr_quantity;
        $product->pr_price = $pr_price;
        $product->pr_discount = $pr_discount;
        $product->save();
        $pr_id = $product->id;
        foreach($pr_colors as $cl)
        {
            $pr_color = new ProductOptionColor;
            $pr_color->products_id = $pr_id;
            $pr_color->colors_id =  $cl;
            $pr_color->save();
        }
        foreach($pr_category as $cate)
        {
            $category = new Cates;
            $category->products_id = $pr_id;
            $category->categories_id =  $cate;
            $category->save();
        }
        foreach($pr_size as $size)
        {
            $PrSize = new ProductOptionSize;
            $PrSize->products_id = $pr_id;
            $PrSize->sizes_id =  $size;
            $PrSize->save();
        }
        foreach($pr_tags as $tag)
        {
            $Tag = new TagPr();
            $Tag->products_id = $pr_id;
            $Tag->tags_id = $tag;
            $Tag->save();
        }
        return redirect()->route('product');
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
