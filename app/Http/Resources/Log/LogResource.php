<?php

namespace App\Http\Resources\Log;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'type' => $this->auditable_type,
            'action' => $this->action,
            'fields' => json_decode($this->fields),
            'created_at' => $this->created_at->format('d/m/Y H:i')
        ];
    }
}
