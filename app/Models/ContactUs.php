<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $table = 'tbl_contactUs'; // name of the table if name differrent from default
    protected $primaryKey = 'contact_id'; 
}
