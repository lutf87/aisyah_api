<?php

namespace App\Http\Resources;

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
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'nama_siswa' => $this->nama_siswa,
            'nisn' => $this->nisn,
            'jkel' => $this->jkel,
            'alamat' => $this->alamat,
            'nama_wali' => $this->nama_wali,
            'kelas' => $this->kelas,
        ];
    }
}
