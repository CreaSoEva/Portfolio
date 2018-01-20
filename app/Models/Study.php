<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $table = 'studies';
    protected $fillable = [
        'name', 'description', 'date_start', 'date_end'
    ];
}

?>
