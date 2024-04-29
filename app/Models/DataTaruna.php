<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTaruna extends Model
{
    use HasFactory;
    protected $table = "data_taruna";
    protected $guarded = "id";
}
