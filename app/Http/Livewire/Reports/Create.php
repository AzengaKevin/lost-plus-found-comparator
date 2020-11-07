<?php

namespace App\Http\Livewire\Reports;

use Livewire\Component;

class Create extends Component
{
    public $lastSeenWithCount = 0;
    public $preliminaryItemsCount = 0;

    public function render()
    {
        return view('livewire.reports.create');
    }

    public function changeLastSeenWith(int $value)
    {
        $this->lastSeenWithCount += $value;
    }

    public function changePreliminaryItemsCount(int $value)
    {
        $this->preliminaryItemsCount += $value;
    }
}
