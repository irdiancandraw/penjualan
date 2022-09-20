<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\Barang;

class Suplier extends Model
{
    use HasFactory;
    protected $table = 'suplier';

    protected $guarded = [];

public function bang(){
    return $this->belongsToMany(Barang::class);
}
}

