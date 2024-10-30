<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Language;

class ProfileController extends Controller
{
    public function index()
{
    $profiles = Profile::all();
    return view('profiles.index', compact('profiles'));
}
    public function show($profile_id)
    {
        $profile= Profile::find($profile_id);
        $languages= $profile->languages;
        return view('profiles.show', compact('profile', 'languages'));
    }
    public function createCv()
    {
        return view('profiles.cv_maker');
    }
}
