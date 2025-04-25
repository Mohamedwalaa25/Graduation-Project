<?php

namespace App\Http\Controllers\ApiMobile;

use App\Traits\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    use Response;

    public function profile()
    {
        $user = auth('users')->user();
        if (!$user) {
            return $this->sendError(__('Unauthenticated.'), [], 401);
        }
        return $this->sendResponse(new ProfileResource($user), __('users.user profile retrived successfully'),200);
        }

        public function updateProfile(Request $request)
        {
            $request->validate([
                'image_name' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $user = auth('users')->user(); 
        
            if (!$user) {
                return response()->json(['message' => 'User not authenticated'], 401);
            }
        
            if ($user->image_name) {
                Storage::disk('public')->delete($user->image_name);
            }
      
            $path = $request->file('image_name')->store('profile_photos', 'public');
         
            $user->update([
                'image_name' => $path,
            ]);
        
            return $this->sendResponse([], __('auth.user profile updated successfully'),200);

        }



        
    public function points(){

        $user = auth('users')->user();
        return $this->sendResponse($user->points, 'Points' , 200);
    }
}
