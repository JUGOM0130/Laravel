<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
    use HasFactory;
    protected $fillable = ['season_start','season_end','address1','place_name','season_A','season_B','season_C','season_D','is_entry_car','is_reserve','comment'];
}
