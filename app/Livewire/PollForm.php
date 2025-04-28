<?php

namespace App\Livewire;

use App\Models\Poll;
use Illuminate\Http\Request;
use Livewire\Component;
use PhpParser\Node\Stmt\TryCatch;

class PollForm extends Component
{ 
    public $title;
    public $start_date;
    public $end_date;
    public $option;
    public $options = [];
    public $message;

    public function render()
    {
        return view('livewire.poll-form');
    }

    public function addOptions () {
        if(!empty($this->option)) {
            $this->options[] = $this->option;
            $this->option = "";
        }
    }

    public function deleteOption($index)
    {
        unset($this->options[$index]);
        $this->options = array_values($this->options); // Reindexa o array
    }

    public function store() {
        // verificar se exitem no minimo 3 opcoes
        if(count($this->options) >= 3) {
            // validar os inputs
            $validated = $this->validate([
                'title' => 'required|string|max:255',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
                'options' => 'required|array|min:3',
                'options.*' => 'required|string|distinct|min:1'
            ]);
            try {
                Poll::create([
                    'title' => $validated['title'],
                    'options' => json_encode($validated['options']),
                    'start_date' => $validated['start_date'],
                    'end_date' => $validated['end_date']
                ]);
                return redirect()->route('home');
            } catch (\Throwable $th) {
                dd($th);
            }
        }

        $this->message = "Escolhe no minimo 3 opções!";
    }
}
