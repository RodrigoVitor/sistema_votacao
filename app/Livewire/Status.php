<?php

namespace App\Livewire;

use Livewire\Component;

class Status extends Component
{
    public $polls;
    public $status = "all";

    public function mount($polls) {
        $this->$polls = $polls;
    }

    public function render()
    {
        return view('livewire.status');
    }

    public function onChangeStatus ($newStatus) {
        $this->status = $newStatus;
    }
}
