<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JadwalSemesterResource extends JsonResource
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
            'mapel' => $this->mapel,
            'guru' => $this->guru,
            'kelas' => $this->kelas,
            'hari' => $this->hari,
            'kategori' => $this->kategori,
            // 'kode_ruang' => $this->kode_ruang,
            'tanggal' => $this->tanggal,
            'semester' => $this->semester,
            'mulai' => $this->mulai,
            'selesai' => $this->selesai,
        ];
    }
}
