<?php

use Livewire\Component;

new class extends Component
{
    public $var = 'Hello from livewire component';
};
?>

<div>
    {{-- The whole future lies in uncertainty: live immediately. - Seneca --}}
    <h1>Livewire Component</h1>
    {{ $var }}
</div>
