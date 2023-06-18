<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pirkums extends Model
{
    use HasFactory;
    public function akmens(){
        return $this->belongsTo(akmens::class);
        }
    public function garsviela(){
        return $this->belongsTo(garsviela::class);
        }
    public function kartis(){
        return $this->belongsTo(kartis::class);
        }
     public function razotajs(){
        return $this->belongsTo(kompanija::class);
        }


}
