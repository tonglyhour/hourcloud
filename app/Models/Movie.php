<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'tbl_movie'; // name of the table if name differrent from default
    protected $primaryKey = 'movie_id'; //name of primarykey if name different from default ID

}
