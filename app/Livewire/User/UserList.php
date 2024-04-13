<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;

class UserList extends Component
{
    #[Title('Pengaturan Pengguna')]
    public function render()
    {
        return view('livewire.user.user-list');
    }
}
