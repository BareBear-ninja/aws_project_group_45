<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serve extends Model
{
    use HasFactory;
    protected $table="serve";
    protected $fillable=["service_id","user_id","status_code"];
}
