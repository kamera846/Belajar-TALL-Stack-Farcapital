<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchComponent extends Component
{
    public $searchKey;
    public $searchAction;

    public function searchTrigger() {
        /** 
         * Search Action
        */
        if ($this->searchAction) $this->emit('search-trigger', $this->searchKey);
        /**
         * Redirect Action
         */
        else redirect('/movies/' . $this->searchKey);
    }

    public function mount(
        $params1 = '',
        $params2 = true
    ) {
        $this->searchKey = $params1;
        $this->searchAction = $params2;
    }

    public function render()
    {
        return view('livewire.search-component');
    }
}
