<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
   public function __construct(){
    $this->middleware(['auth','verified']);
}


    public function edit(){
      return view('settings.profile',['user' => auth()->user()]);
    }

    public function update(ProfileUpdateRequest $request){
         
    }
}
