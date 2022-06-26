<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class ApiProductController extends Controller
{

    public function index()
    {
       $products=Product::paginate(5);  
       return response()->json($products, 200, [], JSON_PRETTY_PRINT);
     
    }

    public function productType()
    {
        $type=DB::table('products')->pluck('Type');
        return response()->json($type, 200, [], JSON_PRETTY_PRINT);
    }

    public function productColor()
    {
        $type=DB::table('products')->pluck('Color');
        return response()->json($type, 200, [], JSON_PRETTY_PRINT);
    }



  
}
