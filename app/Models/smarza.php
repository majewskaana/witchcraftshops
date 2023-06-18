<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class smarza extends Model
{
    use HasFactory;

    protected $fillable = ['apraksts'];
    public function garsviela(){
        return $this->hasMany(garsviela::class);
        }
}
