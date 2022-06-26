<?php

namespace App\Repositories;

use App\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductRepository
{
    /**
     * @var [type]
     */
    public $product;
     /**
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

   /**
    * @return [type]
    */
   public function productData()
   {
       return $this->product::paginate(5);
   }

   /**
    * @param mixed $id
    * 
    * @return [type]
    */
   public function showId( $id)
   {
       return $this->product::findOrFail($id);
   }
   
   /**
    * @param Request $request
    * @param mixed $product
    * 
    * @return [type]
    */
   public function updateData(Request $request, $product)
   {
       return $this->product::find($product)->update($request->all());
   }

   /**
    * @param mixed $id
    * 
    * @return [type]
    */
   public function destroy($id)
   {
       return $this->product::find($id);
   }

   public function history()
   {
    return $this->product::all();
   }

   public function countHistoryData($days)
   {
    return $this->product::where('created_at', '>=', $days)->count();
   }
}