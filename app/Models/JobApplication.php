<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class JobApplication extends Model
{
    use HasFactory;

    public $guarded = ["id"];


    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
    public function user() {
    	return $this->belongsTo(User::class, "user_id");
    }
    public function job() {
    	return $this->belongsTo(Job::class, "job_id");
    }
}
