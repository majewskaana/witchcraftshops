<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zodiaks extends Model
{
    use HasFactory;
    protected $fillable = ['Nosaukums'];
    public function zodiaks(){
        return $this->hasMany(akmens::class);
        }
}
