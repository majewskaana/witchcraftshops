<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartis extends Model
{
    use HasFactory;
    protected $fillable = [
        'nosaukums',
        'efekts',
        'cena',
        'skaits'
    ];
    public function pirkums(){
        return $this->belongsTo(pirkums::class);
        }
}
