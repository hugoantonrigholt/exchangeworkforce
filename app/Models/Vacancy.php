<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    public function employer() {
        return $this->belongsTo(Employer::class);
    }

    public function industry() {
        return $this->belongsTo(Industry::class);
    }

    public function employment() {
        return $this->belongsTo(Employment::class, 'employment_id');
    }
    
    public function employment_function() {
        return $this->belongsTo(EmploymentFunction::class);
    }

    public function education() {
        return $this->belongsTo(Education::class);
    }

    public function vacancy_replies() {
        return $this->hasMany(VacancyReply::class);
    }
}
