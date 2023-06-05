<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PerizinanDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // return [
        //     'id' => $this->id,
        //     'user' => $this->user,
        //     'mulai' => $this->mulai,
        //     'selesai' => $this->selesai,
        //     'judul_izin' => $this->judu_izin,
        //     'pesan_izin' => $this->pesan_izin,
        //     'bukti' => $this->bukti,
        //     'created_at' => date_format($this->created_at, "d m Y"),
        // ];
    }
}
