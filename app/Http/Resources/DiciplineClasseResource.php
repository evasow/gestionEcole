<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DiciplineClasseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Discipline'=>$this->discipline->libelle,
            'evaluation'=> $this->evaluation->libelle,
            'noteMaximale'=>$this->noteMax,
        ];
    }
}
