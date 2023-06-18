<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kompanija extends Model
{
    use HasFactory;
    protected $fillable = ['nosaukums'];
    public function valsts(){
        return $this->belongsTo(valsts::class);
        }
    public function razo(){
            return $this->hasMany(pirkums::class);
            }
}
