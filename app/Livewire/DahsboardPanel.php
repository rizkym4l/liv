<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Component;

class DahsboardPanel extends Component
{
    public  $countEmployee ;
   public function mount(){
   $this->countEmployee = Employee::count();

   }
    public function render()
    {
        return view('livewire.dahsboard-panel',[
            'countEmployee' => $this->countEmployee
        ]);
    }
}
