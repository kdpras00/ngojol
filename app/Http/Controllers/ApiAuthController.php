<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ApiAuthController extends Controller
{
    public function requestResetPassword(Request $request)
    {
    $request->validate(['email' => 'required|email']);
        
    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
            ? response()->json(['message' => 'Reset link sent to your email.'], 200)
            : response()->json(['message' => 'Unable to send reset link.'], 500);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
    ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
            }
        );

    return $status === Password::PASSWORD_RESET
        ? response()->json(['message' => 'Password has been reset.'], 200)
            : response()->json(['message' => 'Password reset failed.'], 500);
    }
}
