<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $primaryKey = 'profile_id';//you need to specify this if you have custom id name

    public function languages()
    {
        return $this->hasMany(Language::class, 'profile_id', 'profile_id');
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class, 'profile_id', 'profile_id');
    }

    public function hardskills()
    {
        return $this->hasMany(Hardskill::class, 'profile_id', 'profile_id');
    }

    public function softSkills()
    {
        return $this->hasMany(SoftSkill::class, 'profile_id', 'profile_id');
    }

    public function websites()
    {
        return $this->hasMany(Website::class, 'profile_id', 'profile_id');
    }

    public function educations()
    {
        return $this->hasMany(Education::class, 'profile_id', 'profile_id');
    }

    public function careers()
    {
        return $this->hasMany(Career::class, 'profile_id', 'profile_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'profile_id', 'profile_id');
    }

    public function resumes()
    {
        return $this->hasMany(Resume::class, 'profile_id', 'profile_id');
    }


}
