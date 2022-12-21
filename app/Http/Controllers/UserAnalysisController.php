<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAnalysisController extends Controller
{
    //user analysis
    public function userAnalysis()
    {
      if(Auth::user()->role == 'admin'){
        return redirect()->route('admin#dashboard');
    }elseif(Auth::user()->role == 'merchant'){
        return redirect()->route('merchant#dashboard');
    }else{
      return redirect()->route('user#home');
    }
  }
}
