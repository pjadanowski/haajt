<?php

namespace App\Livewire\Pages;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Livewire\Forms\ContactForm;

class Contact extends Component
{
    public ContactForm $form;

    public function render()
    {
        return view('livewire.pages.contact');
    }

    public function submit()
    {
        Mail::to(config('settings.contact_email'))
            ->bcc('p.jadanowski@gmail.com')
            ->send(new ContactFormMail(
                name: $this->form->name,
                email: $this->form->email,
                phone: $this->form->phone,
                body: $this->form->message
            ));

        session()->flash('success', 'Dziękujemy, wiadomość została wysłana. Odezwiemy się tak szybko jak to możliwe.');
        $this->form->reset();

        return back();
    }
}
