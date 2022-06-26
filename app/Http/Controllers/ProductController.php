<?php

namespace App\Http\Controllers;

use App\Charts\PriceHistoryChart;
use App\Product;
use App\Services\ProductService;
use Carbon\Carbon;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    /**
     * @var [type]
     */
    public $productService;

    /**
     * @param ProductService $productService
     */
    public function __construct( ProductService $productService)
    {
         $this->productService=$productService;   
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
     public function index()
    {
        $products=$this->productService->getProductData();
       
        return view('product',compact('products'));
    }

    /**
     * @param mixed $product
     * 
     * @return [type]
     */
    public function ShowDelete( $product)
    {
        $products=$this->productService->showId($product);

        return view('delete')->with('products',$products);
    }

    /**
     * @param mixed $product
     * 
     * @return [type]
     */
    public function ShowUpdate( $product)
    {
      
        $products=$this->productService->showId($product);
        return view('update')->with('products',$products);
      
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
      $this->productService->updateData($request,$product);

      return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $product)
    {
       $productDelete=$this->productService->destroy($product);
       $productDelete->delete();
   
        return redirect()->back();
    }

    /**
     * @return [type]
     */
    public function history()
    {
        $products = $this->productService->history();
        $price = $this->productService->makeChart();

        return view('history', compact('products','price'));
    }

}
