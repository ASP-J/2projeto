<?php
    namespace App\Http\Resources;
    use Illuminate\Http\Resources\Json\JsonResource;
    class UserResource extends JsonResource
    {
        public function toArray($request) 
            {
                return [
                    'id' => $this->id,
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' => $this->password,
                    'id_admin' => $this->id_admin,
                    'created_at' => $this->created_at->toIso8601String(),
                    'updated_at' => $this->updated_at->toIso8601String(),
                ];
            }
    }