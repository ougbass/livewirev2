<?php

use Livewire\Component;

new class extends Component
{
    public string $name = 'Johnny';

    // protected and private properties don't show on our view
    protected string $email = 'email@email.com';
    private ?string $number = '+55555555555';
};
?>

<div>
    // This way the $name property waits an action
    <x-text-input wire:model="name" type="text"/> {{ $name }}

    //This way the $name property updates as we type
    //new in Livewire 3, no need to add .live modifier
    <x-text-input wire:model.live="name"/> {{ $name }}
</div>
