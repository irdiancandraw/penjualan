<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\Barang;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $guarded = [];
    public function bangrang(){
        return $this->belongsToMany(Barang::class);
    }
    }
        
