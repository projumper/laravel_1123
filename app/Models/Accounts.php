<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{

    //https://laravel.com/docs/10.x/eloquent

    
    use HasFactory;

    protected $table = "Accounts";

    protected $primaryKey = "id";

    public $timestamps = false;
}
