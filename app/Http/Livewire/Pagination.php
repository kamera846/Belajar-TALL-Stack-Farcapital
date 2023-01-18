<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pagination extends Component
{

    public $currentPage;
    public $totalPage;

    public function prevPage() {
        if ($this->currentPage > 1) {
            $this->currentPage -= 1;
            $this->emit('onPageChange', $this->currentPage);
        }
    }

    public function nextPage() {
        if ($this->currentPage < $this->totalPage) {
            $this->currentPage += 1;
            $this->emit('onPageChange', $this->currentPage);
        }
    }

    public function mount(
        $currentPage = 1,
        $totalPage = 1,
    ) {
        $this->currentPage = $currentPage;
        $this->totalPage = $totalPage;
    }

    public function render()
    {
        return view('livewire.pagination');
    }
}
