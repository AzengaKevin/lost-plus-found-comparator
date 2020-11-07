<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ProfilePicture extends Component
{
    use WithFileUploads;

    public $photo;
    
    public function render()
    {
        return view('livewire.users.profile-picture');
    }

    public function changeProfilePicture()
    {
        $this->validate([
            'photo' => ['bail', 'image', 'mimes:jpg,png,jpeg', 'max:2048']
        ]);

        //Check whether the user has profile picture
        if(!is_null(Auth::user()->photo))
            Auth::user()->photo->deleteFile();

        //Saving the file logic
        $filePath = $this->photo->store('profile-photos');

        Auth::user()->photo()->create([
            'path' => $filePath,
        ]);
    }
}
