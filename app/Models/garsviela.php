<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class garsviela extends Model
{
    use HasFactory;
    protected $fillable = [
        'nosaukums',
        'efekts',
        'cena',
        'skaits'
    ];
    public function smarza(){
        return $this->belongsTo(smarza::class);
        }

        public function kompanija(){
            return $this->belongsTo(kompanija::class);
            }
}
