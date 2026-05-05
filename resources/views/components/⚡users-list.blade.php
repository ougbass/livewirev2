<?php

use Livewire\Component;
use App\Models\User;

new class extends Component
{
    public array $users = [];

    public function mount()
    {
        $this->users = User::all()->toArray();
    }
};
?>



<div class="relative overflow-x-auto border shadow-xs bg-neutral-primary-soft rounded-base border-default">
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
                        <a href="#" class="font-medium text-fg-brand hover:underline">Edit</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

