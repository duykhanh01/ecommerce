<?php

namespace App\Http\Controllers;

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
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allProducts = DB::table('products')->select(DB::raw('*'))->limit(4)->get();
        return view('home',['products'=>$allProducts]);
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
        $product = Product::Find($id);
        if($product)
        {
            $user_id = auth()->id();
            $imgs = DB::table('product_imgs')
                    ->where('product_imgs.products_id', '=', $id) 
                    ->select('img_name')
                    ->get();
            $size = DB::table('products')
                    ->where('products.id', '=', $id) 
                    ->join('product_option_sizes', function ($join){
                        $join->on('products.id','=','product_option_sizes.products_id');
                    })
                    ->join('sizes', 'sizes.id','=','product_option_sizes.sizes_id')
                    ->select('sizes.id', 'sizes.size_name')
                    ->get();
            
            $color = DB::table('products')
                    ->where('products.id', '=', $id) 
                    ->join('product_option_colors', function ($join){
                        $join->on('products.id','=','product_option_colors.products_id');
                    })
                    ->join('colors', 'colors.id','=','product_option_colors.colors_id')
                    ->select('colors.id', 'colors.color_name')
                    ->get();
            
            $category =  DB::table('products')
                        ->where('products.id', '=', $id) 
                        ->join('cates', function ($join){
                            $join->on('products.id','=','cates.products_id');
                        })
                        ->join('categories', 'categories.id','=','cates.categories_id')
                        ->select('cates.categories_id', 'categories.cate_name')
                        ->get();
           
            $tag = DB::table('products')
                    ->where('products.id', '=', $id) 
                    ->join('tag_prs', function ($join){
                        $join->on('products.id','=','tag_prs.products_id');
                    })
                    ->join('tags', 'tags.id','=','tag_prs.tags_id')
                    ->select('tags.id', 'tags.tag_name')
                    ->get();
            return view('product-details',['product'=>$product,'user_id'=>$user_id, 'colors'=>$color, 'sizes'=>$size, 'tags'=>$tag, 'categories'=>$category, 'imgs'=>$imgs]);
        }
        else
        {
            return redirect()->route('home');
        }
        
        
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
