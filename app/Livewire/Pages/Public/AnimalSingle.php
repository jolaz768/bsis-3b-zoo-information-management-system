<?php

namespace App\Livewire\Pages\Public;

use App\Models\Animal;
use Livewire\Component;

class AnimalSingle extends Component
{

    public Animal $animal;
 
    

 public function mount($id)
 {
     $this->animal = Animal::find($id);
    
    
 }
    public function render()
    {
        return view('livewire.pages.public.animal-single');
    }
}
