<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
class job extends Model
{
    use HasFactory;
    public $guarded = ["id"];
    // protected $fillable = ['user_id', 'title', 'category', 'description'];


    public function category() {
    	return $this->belongsTo('App\Category');
    }
    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function jobType()
    {
        return $this->belongsTo(JobType::class, 'job_type_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    /*public function user()
    {   // one to many (inverse)
        return $this->belongsTo('App\Models\Company', 'foreign_key', 'other_key');
    }**/
}
