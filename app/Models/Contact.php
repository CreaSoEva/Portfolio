<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'id_user','name', 'firstname', 'email', 'contents'
    ];
}

?>