<?php

use Livewire\Component;
use App\Models\User;

new class extends Component
{
    public string $text = '';
    public ?User $user = null;

    public function boot()
    {
        ds(__METHOD__ );
    }

    public function booted()
    {
        ds(__METHOD__);
    }

    public function mount()
    {
        $this->user = auth()->user();
        ds(__METHOD__);
    }

    public function hydrate()
    {
        ds(__METHOD__);
    }

    public function dehydrate()
    {
        ds(__METHOD__);
    }

    public function updating($a, $b)
    {
        ds(__METHOD__, compact('a', 'b'));
    }

    public function updated()
    {
        ds(__METHOD__);
    }
};
?>

<div>
    <x-text-input wire:model.live='text'></x-text-input> <br>
    {{ $user->name }}
</div>
