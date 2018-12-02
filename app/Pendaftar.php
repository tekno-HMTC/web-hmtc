<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
  public $table = "pendaftar";

  protected $fillable = [
      'nama',
      'nrp' ,
      'pilihan_satu', 
      'alasan_pilihan_satu',
      'pilihan_dua', 
      'alasan_pilihan_dua',
      'pilihan_tiga', 
      'alasan_pilihan_tiga',
      'file_foto',
      'file_cv',
      'file_mbti'
  ];
}
