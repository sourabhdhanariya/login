<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

/**
 * Class LoginController
 *
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    /**
     * Display the login form.
     *
     * @return View
     */
    public function index()
    {
        return view('login');
    }

    /**
     * login
     * @param Request $request
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = UserModel::loginUser($email, $password);

        if ($user) {
            return redirect('dashboard');
        } else {
            return redirect('login')->with('msg', 'Invalid Credentials');
        }
    }

    /**
     * Log out
     * @param Request $request
     */
    public function logout(Request $request)
    {
        UserModel::logoutUser();

        return redirect('login')->with('msg', 'Successfully logged out');
    }
}
