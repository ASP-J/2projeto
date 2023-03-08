<?php
    namespace App\Http\Resources;
    use Illuminate\Http\Resources\Json\JsonResource;
    class BookResource extends JsonResource
    {
        public function toArray($request) 
            {
                return [
                    'id' => $this->id,
                    'tittle' => $this->tittle,
                    'description' => $this->description,
                    'author' => $this->author,
                    'quantity' => $this->quantity,
                    'created_at' => $this->created_at->toIso8601String(),
                    'updated_at' => $this->updated_at->toIso8601String(),
                ];
            }
    }