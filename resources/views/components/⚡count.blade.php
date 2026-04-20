<?php

use Livewire\Component;

new class extends Component
{
    public string $name = 'Johnny';

    // protected and private properties don't show on our view
    protected string $email = 'email@email.com';
    private ?string $number = '+55555555555';

    public function toggle(string $case)
    {
        if($case === 'LOWER') {
            $this->name = str($this->name)->lower();
        } elseif($case === 'UPPER') {
            $this->name = str($this->name)->upper();
        }
    }
};
?>

<div>
     {{-- This way the $name property waits an action --}}
    <x-text-input wire:model="name" type="text"/>
    <x-primary-button wire:click="toggle('LOWER')">Lower</x-primary-button>
    <x-secondary-button wire:click="toggle('UPPER')">Upper</x-secondary-button>

    {{-- //This way the $name property updates as we type
    //new in Livewire 3, no need to add .live modifier --}}
    {{-- <x-text-input wire:model.live="name"/> {{ $name }} --}}
</div>
