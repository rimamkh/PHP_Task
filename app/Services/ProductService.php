<?php

namespace App\Services;

use App\Charts\PriceHistoryChart;
use App\Product;
use App\Repositories\ProductRepository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductService
{
    /**
     * @var [type]
     */
    public $productRepo;
     /**
     * @param ProductRepository $productRepo
     */
    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    /**
     * @return [type]
     */
    public function getProductData()
    {
        return $this->productRepo->productData();
    }

    /**
     * @param mixed $id
     * 
     * @return [type]
     */
    public function showId($id)
    {
        return $this->productRepo->showId($id);
    }

    /**
     * @param Request $request
     * @param mixed $product
     * 
     * @return [type]
     */
    public function updateData(Request $request, $product)
    {
        return $this->productRepo->updateData($request, $product);
    }

    /**
     * @param mixed $product
     * 
     * @return [type]
     */
    public function destroy($product)
    {
        return $this->productRepo->destroy($product);
    }

    /**
     * @return [type]
     */
    public function history()
    {
        return $this->productRepo->history();
    }

    /**
     * @return [type]
     */
    public function makeChart()
    {
        $firstMonth =  $this->productRepo->countHistoryData(30);
        $secondMonth = $this->productRepo->countHistoryData(60);
        $thirdMonth =  $this->productRepo->countHistoryData(90);
        //show the chart
        $price = new PriceHistoryChart;
        $price->labels(['30','60','90']);
        $price->dataset('Price','line',[$firstMonth, $secondMonth, $thirdMonth]);

        return $price;
    }

}