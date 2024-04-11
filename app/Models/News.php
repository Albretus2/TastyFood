<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // field yang tidak boleh dirubah atau di hapus
    protected $guarded = [
        'id'
    ];



    // relasi table
    public function user()
    {
        return $this->belongsTo(user::class);
    }


    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
