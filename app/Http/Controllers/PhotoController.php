<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class PhotoController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'theme_id' => 'required|exists:themes,id',
        ]);

        // Store the image
        $imagePath = $request->file('image')->store('photos', 'public');

        // Create a new photo entry
        $photo = new Photo([
            'user_id' => Auth::id(),
            'theme_id' => $request->theme_id,
            'image_path' => $imagePath,
            'name' => $request->name,
            'likes_count' => 0, // Initialize likes count to zero
        ]);
        $photo->save();

        // Redirect to the home page with a success message
        return redirect()->route('home')->with('success', 'Photo uploaded successfully!');
    }

    public function like($photoId)
    {
        $photo = Photo::findOrFail($photoId);
        $user = Auth::user();

        // Check if the user has already liked this photo
        if ($user->likes()->where('photo_id', $photoId)->exists()) {
            return redirect()->route('home')->with('error', 'You have already liked this photo.');
        }

        // Add the like (you can create a 'likes' pivot table if needed)
        $photo->increment('likes_count');
        $user->likes()->attach($photoId);  // Assuming you have a 'likes' relationship

        return redirect()->route('home')->with('success', 'You liked the photo!');
    }

    // PUT method for updating photo details
    public function update($id, Request $request)
    {
        $photo = Photo::find($id);

        // Check if the photo exists and if the authenticated user is the owner
        if (!$photo || $photo->user_id !== Auth::id()) {
            return redirect()->route('home')->with('error', 'Unauthorized or photo not found.');
        }

        // Validate and update the photo details
        $request->validate([
            'name' => 'required|string|max:255',
            'theme_id' => 'required|exists:themes,id',
        ]);

        $photo->update([
            'name' => $request->name,
            'theme_id' => $request->theme_id,
        ]);

        // Redirect to the home page with a success message
        return redirect()->route('home')->with('success', 'Photo updated successfully!');
    }

    // DELETE method for deleting the photo
    public function destroy($id)
    {
        $photo = Photo::find($id);

        // Check if the photo exists and if the authenticated user is the owner
        if (!$photo || $photo->user_id !== Auth::id()) {
            return redirect()->route('home')->with('error', 'Unauthorized or photo not found.');
        }

        // Delete the photo
        $photo->delete();

        // Redirect to the home page with a success message
        return redirect()->route('home')->with('success', 'Photo deleted successfully!');
    }
}
