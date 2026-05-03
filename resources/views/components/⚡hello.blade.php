<?php

use Livewire\Component;
use App\Models\User;

new class extends Component
{
    public string $text = 'Text';
    public ?User $user = null;

    public function boot()
    {
        ds(__METHOD__ . '::' . now()->toString());
    }

    public function booted()
    {
        ds(__METHOD__ . '::' . now()->toString());
    }

    public function mount()
    {
        $this->user = auth()->user();
        ds(__METHOD__);
    }

    public function hydrate()
    {
        ds(__METHOD__ . '::' . now()->toString());
    }

    public function dehydrate()
    {
        ds(__METHOD__ . '::' . now()->toString());
    }

    public function updating()
    {
        ds(__METHOD__ . '::' . now()->toString());
    }

    public function updated()
    {
        ds(__METHOD__ . '::' . now()->toString());
    }
};
?>

<div>
    <x-text-input wire:model='text'></x-text-input> <br>
    {{ $user->name }}
</div>
