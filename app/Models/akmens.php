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
        return $this->belongsTo(zodiaks::class);
        }
    public function razo(){
        return $this->belongsTo(kompanija::class);
        }
}
