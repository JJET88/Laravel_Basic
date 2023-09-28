<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            "name"=>$this->name,
            "price"=>$this->price,
            "stock"=>$this->stock,
            "created_date"=>$this->created_at->format("d M Y")
        ];
    }
}
