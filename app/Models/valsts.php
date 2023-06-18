<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class valsts extends Model
{
    use HasFactory;
    protected $fillable = ['nosaukums'];
    public function valsts(){
        return $this->hasMany(kompanija::class);
        }
}
