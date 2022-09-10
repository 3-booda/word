<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    use HasFactory;

    protected $table = 'healths';
    protected $fillable = [
        'name',
        'age',
        'gender',
        'job',
        'marital_status',
        'office',
        'disease_date',
        'entry_date',
        'primary_diagnosis',
    ];
}
