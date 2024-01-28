<?php

namespace App\Livewire\Components;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $username;
    public $bio;
    public $profile;
    public User $user;

    public function mount()
    {
        $this->user = Auth::user();
    }
    public function update()
    {
        $this->validate([
            'username' => 'required|unique:users,name|max:35',
            'bio' => 'nullable|max:255',
            'profile' => 'nullable|image|max:1024',
        ]);

        $bio = $this->bio;

        try {
            if ($bio and $this->profile) {
                $this->user->name = $this->username;
                $this->user->bio = $bio;
                $this->user->profile = $this->profile;
            } elseif ($bio) {
                $this->user->name = $this->username;
                $this->user->bio = $bio;
            } elseif ($this->profile) {
                $this->user->name = $this->username;
                $this->user->profile = $this->profile;
            } else {
                $this->user->name = $this->username;
            }
            $this->user->save();

            return redirect()->intended('/dashboard');
        } catch (\Illuminate\Database\QueryException $th) {
            return redirect('/dashboard')->withErrors(['failed_prof', 'Failed to set the profile']);
        }
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
