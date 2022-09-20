<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $guarded = [];

 public function suplier(){
    return $this->belongsTo(suplier::class);
 }
 public function pembeli(){
   return $this->belongsTo(Pembeli::class);
 }

 public function pembelian(){
   return $this->belongsTo(Pembelian::class);
 }
        public function kategori(){
            return $this->belongsTo(kategori::class);
         }
    }
