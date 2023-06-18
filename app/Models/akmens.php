<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akmens extends Model
{
    use HasFactory;
    protected $fillable = [
        'nosaukums',
        'efekts',
        'cena',
        'skaits'
    ];
    public function zodiaks(){
        return $this->hasMany(zodiaks::class);
        }
    public function pirkums(){
        return $this->belongsTo(pirkums::class);
        }
}
