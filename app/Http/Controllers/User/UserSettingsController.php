<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserSettingsController extends Controller
{
    public function changePass(Request $request)
    {
        $user = Auth::user();
        $data = $request->validate([
            'old_password' => 'string|required',
            'password' => 'string|required|confirmed'
        ]);
        $success = Hash::check($data['old_password'], $user->getAuthPassword());
        if ($success) {
            $model = $user->update([
                'password' => Hash::make($data['password']),
            ]);
            if ($model) {
                return redirect()->route('user.security')->withSuccess('Password changed');
            } else {
                return redirect()->route('user.security')->withErrors(['error' => 'Server error']);
            }
        } else {
            return redirect()->route('user.security')->withErrors(['error' => 'Incorrect old password']);
        }
    }

    public function changeStatus(Request $request)
    {
        $user = Auth::user();
        $data = $request->validate([
            'status' => 'string',
        ]);
        $model = $user->update([
            'status' => $data['status'],
        ]);
        if ($model) {
            return redirect()->route('user.index')->withSuccess('Status changed');
        } else {
            return redirect()->route('user.index')->withErrors(['error' => 'Server error']);
        }
    }

    public function changePhoto(Request $request)
    {
        $user = Auth::user();
        $data = $request->validate([
            'photo' => 'required|image|max:5120'
        ]);
        if (!empty($user->photo))
            Storage::disk('public')->delete($user->photo);
        $model = $user->update([
            'photo' => Storage::disk('public')->put("/user/photo/{$user->getAuthIdentifier()}", $data['photo'])
        ]);
        if ($model) {
            return redirect()->route('user.index')->withSuccess('Photo changed');
        } else {
            return redirect()->route('user.index')->withErrors(['error' => 'Server error']);
        }
    }
}
