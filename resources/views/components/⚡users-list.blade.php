<?php

use Livewire\Component;
use App\Models\User;

new class extends Component
{
    public array $users = [];

    // Load users when the component is mounted
    public function mount()
    {
        // Fetch all users from the database and convert to an array
        $this->users = User::all()->toArray();
    }

    // Edit a user and update the users list
    public function edit($id)
    {
        // find the user by ID
        $user = User::find($id);

        //update the users name with a fake name
        $user->name = fake()->name();

        // persist the changes to the database
        $user->save();

        // Refresh the users list after editing, so we can see it in the UI
        $this->users = User::all()->toArray();
    }
};
?>



<div class="relative overflow-x-auto border shadow-xs bg-neutral-primary-soft rounded-base border-default">
    {{-- Users Table--}}
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="border-b bg-neutral-secondary-soft border-default">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">
                    ID
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr class="border-b odd:bg-neutral-primary even:bg-neutral-secondary-soft border-default">
                    <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                        {{ $item['id'] }}
                            </th>
                    <td class="px-6 py-4">
                        {{ $item['name'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item['email'] }}
                    </td>
                    <td class="px-6 py-4">
                        <x-secondary-button wire:click='edit({{ $item["id"] }})'>Edit</x-secondary-button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

