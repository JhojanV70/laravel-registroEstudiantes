<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Querie extends Model
{
    use HasFactory;
    protected $table = "queries";
    protected $primarykey = "id";
    public $timestamps = false;
}
