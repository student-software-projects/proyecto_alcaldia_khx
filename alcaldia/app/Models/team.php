<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable = [
        'name_team','logo','locality_id'
    ];
}
