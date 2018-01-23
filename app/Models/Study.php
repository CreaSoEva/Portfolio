<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $table = 'studies';
    protected $fillable = [
        'id_user','name', 'description', 'date_start', 'date_end'
    ];
}

?>
