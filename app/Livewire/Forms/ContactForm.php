<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class ContactForm extends Form
{
    #[Rule('required', message: 'Imię i nazwisko jest wymagane')]
    public string $name;
    #[Rule('required', message: 'Email jest wymagany')]
    #[Rule('email', message: 'Email ma zły format')]
    public string $email;
    #[Rule('required', as: 'Numer telefonu')]
    public string $phone;
//    #[Rule('required', message: 'Temat wiadomości jest wymagana')]
//    public string $subject;
    #[Rule('required', message: 'Treść wiadomości jest wymagana')]
    public string $message;
    #[Rule('required')]
    public string $gRecaptchaToken;
}
