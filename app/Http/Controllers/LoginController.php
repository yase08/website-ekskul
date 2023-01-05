<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function loginStore(Request $request)
  {
    $credential = $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);
    if (Auth::attempt($credential)) {
      $request->session()->regenerate();
      return redirect()->route('dashboard');
    } else {
      return redirect()->route('login');
    }
  }

  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('pages.index');  
  }
}
