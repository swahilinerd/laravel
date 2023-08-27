<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoItem extends Component
{
    public $todos; 
    public string $todoTitle;

    public function mount() 
    {
        $this->selectTodos();
    }

    public function render()
    {
        return view('livewire.todo-item');
    }

    public function addTodo()
    {
        $todo = new Todo();
        $todo->title = $this->todoTitle; 
        $todo->save();

        $this->todoTitle = '';
        $this->selectTodos();
    }

    public function toggleTodo($id)
    {
        $todo = Todo::where('id', $id)->first();
        if (!$todo) {
            return;
        }
        $todo->completed = !$todo->completed; 
        $todo->save();
        $this->selectTodos();
    }

    public function deleteTodo($id)
    {
        $todo = Todo::where('id', $id)->first();
        if (!$todo) {
            return;
        }
        $todo->delete(); 
        $this->selectTodos();
    }


    public function selectTodos() 
    {
        $this->todos = Todo::orderBy('created_at', 'DESC')->get();
    }


}
