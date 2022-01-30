<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineRegistration extends Model
{
    protected $table = 'vaccine_registration';
    protected $guarded = ['id'];

    use HasFactory;
}
