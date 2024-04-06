<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class AuthenticationForm extends Form
{
    #[Validate('required', onUpdate: false, message: 'Email tidak boleh kosong')]
    #[Validate('email:rfc', onUpdate: false, message: 'Format email tidak sesuai')]
    public string $email;

    #[Validate('required', onUpdate: false, message: 'Password tidak boleh kosong')]
    public string $password;
}
