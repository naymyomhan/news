<?php

namespace App\Http\Controllers;

use App\Http\Resources\GlobalPriceResource;
use App\Http\Resources\LocalPriceResource;
use App\Models\GlobalPrice;
use App\Models\LocalPrice;
use App\Traits\ResponseTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PriceController extends Controller
{   
    use ResponseTrait;

    public function getLocalPrices(Request $request){
        $item_name=$request->item_name;

        $prices=LocalPrice::where('item_name',$item_name)->orderBy('date', 'asc')->latest()->paginate(7);
        $current_index = 1;
        foreach($prices as $price){
            $price->index= $current_index;
            $current_index++;
        }
        if($request->month!=null && $request->year!=null){
            
        }
        if($request->day){

        }  
        return $this->success("Local Prices",LocalPriceResource::collection($prices));
    }

    public function getItems(){
        $items = ['Gold', 'Silver', 'Platinum', 'Palladium'];
        return $this->success("get items successful",$items);
    }

    public function getGlobalPrices(Request $request){
        $item_name=$request->item_name;

        $prices=GlobalPrice::where('item_name',$item_name)->orderBy('date', 'asc')->latest()->paginate(7);
        $current_index = 1;
        foreach($prices as $price){
            $price->index= $current_index;
            $current_index++;
        }
        if($request->month!=null && $request->year!=null){
            
        }
        if($request->day){

        }  
        return $this->success("Local Prices",GlobalPriceResource::collection($prices));
    }

    public function addLocalItems(Request $request){
        $items = ['Gold', 'Silver', 'Platinum', 'Palladium'];
        // Define the date range (past 2 months)
        $startDate = Carbon::now()->subMonths(2);
        $endDate = Carbon::now();

        $currentDate = $startDate->copy();

        while ($currentDate <= $endDate) {
            foreach ($items as $item) {
                $price = mt_rand(1970, 2000);
        
                $localPrice = new LocalPrice();
                $localPrice->item_name = $item;
                $localPrice->price_local = $price;
                $localPrice->unit = 'USD'; 
                $localPrice->city = 'Yangon'; 
                $localPrice->state_division = 'Yangon';
                $localPrice->date = $currentDate->toDateString();
                
                $localPrice->save();
            }
            
            $currentDate->addDay();
        }
    }


    public function addGlobalItems(Request $request){
        $items = ['Gold', 'Silver', 'Platinum', 'Palladium'];
        // Define the date range (past 2 months)
        $startDate = Carbon::now()->subMonths(2);
        $endDate = Carbon::now();

        $currentDate = $startDate->copy();

        while ($currentDate <= $endDate) {
            foreach ($items as $item) {
                $price = mt_rand(1970, 2000);
        
                $globalPrice = new GlobalPrice();
                $globalPrice->item_name = $item;
                $globalPrice->price_global = $price;
                $globalPrice->unit = 'USD'; 
                $globalPrice->city = 'New York'; 
                $globalPrice->country = 'United State';
                $globalPrice->date = $currentDate->toDateString();
                
                $globalPrice->save();
            }
            
            $currentDate->addDay();
        }
    }
}
