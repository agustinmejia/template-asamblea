<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PublicationsCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    public function types(){
        return $this->hasMany(PublicationsType::class);
    }
}
