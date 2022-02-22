<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function login(request $request){
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

        $credential = $request->only('username','password');
            if (Auth::attempt($credential)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect()->intended('/dashboard');
                } elseif ($user->level == 'user') {
                    return redirect()->intended('/user-dashboard');
                }
                return redirect()->intended('/');
            }

        return redirect('/')
                                ->withInput()
                                ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }
}
