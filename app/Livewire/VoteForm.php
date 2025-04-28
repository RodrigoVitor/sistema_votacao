<?php

namespace App\Livewire;

use App\Models\Vote;
use Livewire\Component;

class VoteForm extends Component
{
    public $poll;
    public $total;
    public $selectedOption;
    public $isVoted = false;
    public $message;
    public $totalVoteById;

    public function mount($poll, $total)
    {
        $this->poll = $poll;
        $this->total = $total;
    }

    public function render()
    {
        return view('livewire.vote-form');
    }

    public function store() {
        if($this->selectedOption) {
            try {
                Vote::create([
                    'poll_id' => $this->poll->id,
                    'option' => $this->selectedOption
                ]);
                $this->isVoted = true;
                $this->message = "Obrigado pelo seu voto!";
                $this->total = Vote::where('poll_id', $this->poll->id)->count();
            } catch (\Throwable $th) {
                dd($th);
            }
        }
    }
}
