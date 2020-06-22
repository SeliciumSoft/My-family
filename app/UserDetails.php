<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    //
    protected $table = 'user_details';
    protected $fillable = [
        'user_id',
        'phone' ,
        'mobile',
        'website' ,
        'education',
        'gender' ,
        'country',
        'education_current',
        'education_country',
        'highest_degree' ,
        'education_university',
        'work' ,
        'work_current',
        'company' ,
        'work_country' ,
        'fb' ,
        'twitter' ,
        'instagram' ,
        'nationality',
        'about',
        'relationship_status',
        'profile_pic',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
