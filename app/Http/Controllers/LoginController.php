<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
                    $request->session()->regenerate();
                    return redirect()->intended('/dashboard');
                } elseif ($user->level == 'user') {
                    $request->session()->regenerate();
                    return redirect()->intended('/user-dashboard');
                }
                return redirect()->intended('/login');
            }

        return redirect('/login')
                                ->withInput()
                                ->with('login_error', 'Maaf Username atau Password anda salah, mohon coba lagi.');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function home()
    {
       $user = Auth::user();
       if($user->level == 'admin'){
       return redirect('/dashboard');
       }elseif($user->level == 'user'){
        return redirect('/user-dashboard');
       }
    }
}
