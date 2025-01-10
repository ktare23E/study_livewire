<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Counter')]
class Counter extends Component
{
    public $count = 1;

    public function increment($param){
        $this->count+=$param;
    }

    public function decrement(){
        $this->count--;
    }

    public function triggerAlert(){
        $this->dispatch('alert', ['message' => 'This is a Livewire alert!']);
    }

    public function swal(){
        $this->dispatch('swal:alert',[
            'type' => 'success',
            'message' => 'Test Sweet Alert',
            'text' => 'You have successfully triggered an alert'
        ]);
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
