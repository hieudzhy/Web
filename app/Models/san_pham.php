<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class san_pham extends Model
{
    use HasFactory;
    protected $table = 'san_pham';
    public function loai_sp(){
        return $this->belongsTo('App\Models\loai_sp','id_loai_sp');
    }
    public function nhacungcap(){
        return $this->belongsTo('App\Models\nhacungcap','id_ncc');
    }
}
