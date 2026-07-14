<?php

use Livewire\Component;
use App\Models\User;

new class extends Component {

    public ?string $name = null;
    public ?string $email = null;

    // The rules method defines the validation rules for the component's properties.
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:230', 'unique:users,email'],
        ];
    }

    // The updated method is called whenever a property is updated, it validates only wire:model properties that have been updated.
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

       User::factory()->create([
        'name' => $this->name,
        'email' => $this->email
       ]);

    }
};
?>

<div>
    <form class="max-w-md mx-auto" method="POST" wire:submit.prevent='save'>

        <div class="relative z-0 w-full mb-5 group">
            {{-- wire:model.defer prevents the input from being updated in real-time, this way it only updates when the form is submitted --}}
            {{-- wire:model.lazy waits for the input to lose focus before updating --}}
            <input wire:model.lazy='name' type="text" name="name" id="name"
                class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                placeholder="Username" />
            <label for="name" :value="__('Name')"
                class="absolute text-sm duration-300 origin-left transform scale-75 -translate-y-6 text-body top-3 -z-10 peer-focus:inset-s-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Name</label>
                <x-input-error :messages="$errors->get('name')" class="mt-2"></x-input-error>

        </div>

        <div class="relative z-0 w-full mt-8 mb-5 group">
            {{-- wire:model.defer prevents the input from being updated in real-time, this way it only updates when the form is submitted --}}
            {{-- wire:model.lazy waits for the input to lose focus before updating --}}
            <input wire:model.lazy='email' type="text" name="email" id="email"
                class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                placeholder="E-mail"/>
            <label for="email" :value="__('Email')"
                class="absolute text-sm duration-300 origin-left transform scale-75 -translate-y-6 text-body top-3 -z-10 peer-focus:inset-s-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email
                address</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2"></x-input-error>

        </div>

        <x-primary-button
            type="submit"
            class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none mt-8">Submit
        </x-primary-button>
    </form>

</div>
