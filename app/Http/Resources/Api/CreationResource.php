<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class CreationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'date' => $this->date,
            'course' => $this->course,
            'short_desc' => $this->short_description,
            'long_desc' => $this->long_description,
            'picture' => $this->picture,
            'created_by' => $this->created_by,
            'creator_team'=> $this->status,
            'status'=> $this->status,
            'course_year_lecturer'=> $this->ucr_course_year_lecturer_id

        ];
    }
}
