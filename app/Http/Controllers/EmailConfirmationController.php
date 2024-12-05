<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmailConfirmationController extends Controller
{
    public function confirm($token)
    {
        // Find the user by the confirmation token
        $user = User::where('confirmation_token', $token)->first();

        // If user not found or token is invalid, redirect with error
        if (!$user) {
            return redirect()->route('home')->with('error', 'Invalid confirmation token.');
        }

        // Mark the user's email as verified and clear the confirmation token
        $user->email_verified_at = now();
        $user->confirmation_token = null;
        $user->save();

        // Redirect the user to the home page with a success message
        return redirect()->route('home')->with('status', 'Your email has been confirmed!');
    }
}
