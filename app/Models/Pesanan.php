<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = ['user_id'];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function tokos()
    { 
        return $this->belongsToMany(Toko::class, 'pesanan_toko');
    }
}
