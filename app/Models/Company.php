<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\job;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Company extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;
    public $guarded = ["id"];


    /**
     * Get all of the comments for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Job()
    {   //one to many
        return $this->hasMany('App\Models\job', 'foreign_key', 'local_key');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    // public function getRouteKeyName()
    // {
    //     return 'sluge';
    // }



}
