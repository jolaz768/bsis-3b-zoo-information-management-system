<?php

namespace App\Livewire\Pages\Admin\History;

use App\Models\Animal;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class HistoryAnimal extends Component
{
    public $animal;
    #[Computed()]
    public function animals()
    {
        return Animal::onlyTrashed()
            ->with('species:id,species_name', 'habitat:id,hab_name', 'category:id,cat_name', 'needs:id,food_name,animal_needs')
            ->latest('created_at')
            ->get();
    }

    public function restore($id)
    {
        Animal::withTrashed()->findOrFail($id)->restore();
    }
    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.pages.admin.history.history-animal');
    }
}
