<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id'            => $this->id,
            'name'          => ucfirst( $this->name ),
            'last_name'     => ucfirst( $this->last_name ),
            'email'         => $this->email,
            'status'        => $this->status,
            'last_login'    => $this->last_login,
        ];
    }
}
