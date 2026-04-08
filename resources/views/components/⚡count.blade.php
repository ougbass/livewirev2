<?php

use Livewire\Component;

new class extends Component
{
    public $var = 'Hello from livewire component';
    public string $name = 'Nome do usuário';

    // protected and private properties don't show on our view
    protected string $email = 'email@email.com';
    private ?string $number = '+55555555555';
};
?>

<div>
    {{-- The whole future lies in uncertainty: live immediately. - Seneca --}}
    <h1>Livewire Component</h1>
    {{ $var }}
</div>
