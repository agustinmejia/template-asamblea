<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publication extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    public function type(){
        return $this->belongsTo(PublicationsType::class, 'publications_type_id');
    }
}
