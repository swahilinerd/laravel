<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $firstNumber, $lastNumber, $operation, $result;  

    public function render()
    {
        return view('livewire.calculator');
    }

    public function updated($property)
    {
        error_log($property);
    }

    public function calculate()
    {
        $first = (float) $this->firstNumber;
        $last = (float) $this->lastNumber; 
        switch ($this->operation)
        {
            case '+':
                $this->result = $first + $last;
                break;
            case '-':
                $this->result = $first - $last;
                break;
            case '*':
                $this->result = $first * $last;
                break;
            case '/':
                $this->result = $first / $last; 
                break;
            default:
                $this->result = 'Error'; 
        }
    }
}
