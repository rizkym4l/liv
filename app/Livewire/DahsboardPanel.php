<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Component;

class DahsboardPanel extends Component
{

   
    public  $countEmployee = '2';
    public function render()
    {
        return view('livewire.dahsboard-panel');
    }
}
