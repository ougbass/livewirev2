<?php

use Livewire\Component;
use App\Models\User;

new class extends Component
{
    public string $text = '';
    public ?User $user = null;

    protected array $rules = [
        'text' => ['required', 'min:4']
    ];

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

    public function updating()
    {

        ds(__METHOD__);
    }

    public function updated($prop, $value)
    {
        $this->validateOnly($prop);

        ds(__METHOD__, compact('prop', 'value'));
    }
};
?>

<div>
    <x-text-input wire:model.live='text'></x-text-input> <br>
    @error('text')
        <span class="alert alert-danger">{{ $message }}</span>
    @enderror
    {{ $user->name }}
</div>
