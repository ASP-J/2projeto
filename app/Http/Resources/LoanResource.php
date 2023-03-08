<?php
    namespace App\Http\Resources;
    use Illuminate\Http\Resources\Json\JsonResource;
    class LoanResource extends JsonResource
    {
        public function toArray($request) 
            {
                return [
                    'id' => $this->id,
                    'user_name' => $this->user->name,
                    'book_name' => $this->book->tittle,
                    'created_at' => $this->created_at->toIso8601String(),
                    'updated_at' => $this->updated_at->toIso8601String(),
                ];
            }
    }