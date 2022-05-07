<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicOfert extends Model
{
    use HasFactory;

    public function admission_profile(){
        return $this->hasOne(Admission_profile::class, 'academic_ofert');
    }
}
