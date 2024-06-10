<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        dd($request);
        return [
            'first_name' => 'JFT',
            'last_name' => $this->last_name,
            'email' => $this->email
        ];
    }
}
