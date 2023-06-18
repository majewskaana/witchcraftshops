<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kompanija extends Model
{
    use HasFactory;
    protected $fillable = ['nosaukums'];
    public function akmens(){
        return $this->belongsTo(akmens::class);
        }
    public function kartis(){
        return $this->belongsTo(kartis::class);
        }
    public function garsviela(){
        return $this->belongsTo(garsviela::class);
        }

}
