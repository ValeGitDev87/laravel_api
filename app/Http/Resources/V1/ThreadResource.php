<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ThreadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     * 
     */
    //? il ThreasResource viene utilizzato per  ritorare e settare il singolo oggetto che verra 
    //? mostrato nella Respons dell end point,z
    
    public function toArray(Request $request): array
    {

        return [
            "id"=>$this->id,
            "title"=>$this->title,
            "body"=>$this->body,
        ];
    }
}
