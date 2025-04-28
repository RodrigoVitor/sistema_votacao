<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['option', 'poll_id'];

    public function poll() {
        return $this->belognsTo(Poll::class);
    }

    public function getCountByIdAttribute()
    {
        return $this->where('poll_id', $this->poll_id)
                    ->count();
    }
}
