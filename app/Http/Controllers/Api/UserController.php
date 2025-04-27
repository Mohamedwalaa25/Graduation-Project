<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use App\Core\Trait\FileTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Api\UpdateUserRequest;
use App\Http\Resources\Api\UserArticleResource;

class UserController extends Controller
{

    use FileTrait;


    public function articles()
    {
        /** @var \App\Models\User $user */
        $user =  Auth::guard('api')->user();

        if (!$user->articles()->exists()) {
            return apiResponse([], "Not Found Articles", 404);
        }

        return apiResponse([
            'articles' => UserArticleResource::collection($user->articles()->with('user')->get())

        ]);
    }


    public function update(UpdateUserRequest $request)
    {
        $userId = Auth::guard('api')->user()->id;

        // Prepare data with null filtering
        $data = array_filter([
            'name' => $request->getName(),
            'email' => $request->getEmail(),
            'password' => $request->getPassword(),
            'image_name' => $request->getImageName()
        ]);

        try {
            // Handle file upload if exists
            if ($request->hasFile('image_name')) {

                FileTrait::uploade(
                    $request->file('image_name'),
                    $request->file('image_name')->getClientOriginalName(),
                    'Users',
                    'uploades'
                );
            }

            // Update user
            $user = User::findOrFail($userId);
            $user->update($data);

            return apiResponse(
               new UserResource($user),
                'User updated successfully',
                200
            );
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return apiResponse(
                null,
                'User not found',
                404
            );
        } catch (\Exception $e) {
            return apiResponse(
                null,
                'Failed to update user: ' . $e->getMessage(),
                500
            );
        }
    }
}
