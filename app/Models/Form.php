<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'floating_email',
        'floating_password',
        'floating_repeat_password',
        'floating_first_name',
        'floating_last_name',
        'floating_age',
        'floating_image'
    ];
}
