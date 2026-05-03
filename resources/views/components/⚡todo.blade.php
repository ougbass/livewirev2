<?php

use Livewire\Component;
use Livewire\Attributes\On;

new class extends Component {
    public string $name = '';

    // protected $listeners = ['alter' => 'edit'];

    // livewire 3.0 #[On('alter')] instead of protected $listerners
    #[On('alter')]
    public function edit($name)
    {
        $this->name = $name;
    }
};
?>

<div>
    <h2>TODO</h2>
    <p>COUNT AQUI DE CIMA :: {{ $name }}</p>


</div>
