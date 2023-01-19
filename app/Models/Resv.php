<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resv extends Model
{
    protected $table = 'tbl_reservation'; // name of the table if name differrent from default
    protected $primaryKey = 'resv_id'; //name of primarykey if name different from default ID
}
