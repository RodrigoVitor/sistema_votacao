<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = ['title', 'start_date', 'end_date', 'options'];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function getStatusAttribute()
    {
        $currentDate = now()->format('Y-m-d');

        if ($currentDate < $this->start_date) {
            return 'Não iniciado';
        } elseif ($currentDate >= $this->start_date && $currentDate <= $this->end_date) {
            return 'Em andamento';
        } else {
            return 'Finalizado';
        }
    }
}
