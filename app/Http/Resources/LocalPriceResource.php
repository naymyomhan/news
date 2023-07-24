<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class LocalPriceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'index'=>$this->index,
            'itemName' => $this->item_name,
            'priceLocal' => $this->price_local,
            'unit' => $this->unit,
            'city' => $this->city,
            'stateDivision' => $this->state_division,
            'date' =>Carbon::createFromFormat('Y-m-d',$this->date)->format('Y,M d'),
            // 'date' =>str($this->id),
        ];
    }
}
