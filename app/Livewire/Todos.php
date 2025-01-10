<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';

    public $todos = [];

    public function add(){
        array_push($this->todos,$this->todo);
        // $this->todo = '';
        $this->reset('todo');
    }

    // public function updated($property,$values){
    //     $this->$property = strtoupper($values);
    // }

    public function updatedTodo($value){
        $this->todo = strtoupper($value);
    }

    public function mount(){
        $this->todos = [
            'Take out trash',
            'Do dishes'
        ];
    }
    
    public function render()
    {
        return view('livewire.todos');
    }
}
