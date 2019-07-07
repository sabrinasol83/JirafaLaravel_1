<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pagination = 9;
      $categories = Category::all();
      if (request()->category) {
          $products = Product::with('categories')->whereHas('categories', function ($query) {
              $query->where('slug', request()->category);
          });
          $categoryName = optional($categories->where('slug', request()->category)->first())->name;
      } else {
          $products = Product::where('featured', true);
          $categoryName = 'Featured';
      }

      //if (request()->sort == 'low_high') {
          //$products = $products->orderBy('price')->paginate($pagination);
      //} elseif (request()->sort == 'high_low') {
          //$products = $products->orderBy('price', 'desc')->paginate($pagination);
      //} else {
          //$products = $products->paginate($pagination);
      //}

      return view('category')->with([
          'products' => $products,
          'categories' => $categories,
          'categoryName' => $categoryName,
      ]);
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
        Category::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
            //$mightAlsoLike = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();
            //$stockLevel = getStockLevel($product->quantity);
            return view('product')->with([
                'product' => $product,
                //'stockLevel' => $stockLevel,
                //'mightAlsoLike' => $mightAlsoLike,
            ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
     public function edit(Product $product)
     {
         //
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
