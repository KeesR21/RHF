<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MemberCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'id' => $this->id,  
          'names' => $this->names,  
          'email' => $this->email,  
          'position' => $this->position,  
          'photo' => $this->photo,  
        ];
    }
}
