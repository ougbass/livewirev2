<?php

use Livewire\Component;

new class extends Component {
    public string $name = '';

    protected $listeners = ['alter' => 'edit'];

    public function edit($data)
    {
        $this->name = $data;
    }
};
?>

<div>
    <h2>TODO</h2>
    <p>COUNT AQUI DE CIMA :: {{ $name }}</p>


</div>
