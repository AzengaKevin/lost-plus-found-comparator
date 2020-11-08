<?php

namespace App\Http\Livewire\Users;

use App\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ProfileInformation extends Component
{
    public $name;
    public $email;
    public $phone_number;
    public $national_identification_number;

    protected $rules = [
        'name' => ['bail', 'required'],
        'email' => ['bail', 'required', 'email'],
        'phone_number' => ['bail', 'required', 'numeric'],
        'national_identification_number' => ['bail', 'required'],
    ];

    public function mount(){

        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->phone_number = Auth::user()->phone_number;
        $this->national_identification_number = Auth::user()->national_identification_number;
        
    }

    public function render()
    {
        return view('livewire.users.profile-information');
    }

    public function save()
    {
        $data = $this->validate();

        Auth::user()->update($data);
        
        Log::notice('User profile updated: user ' . Auth::user()->id);
    }
}
