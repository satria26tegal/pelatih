<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatih extends Model
{
    use HasFactory;
    protected $table = 'pelatih';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
