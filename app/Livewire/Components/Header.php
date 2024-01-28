<?php

namespace App\Livewire\Components;

use Illuminate\Http\Request;
use Livewire\Component;

class Header extends Component
{
    public function logout(Request $req)
    {
        $req->session()->flush();

        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.components.header');
    }
}
