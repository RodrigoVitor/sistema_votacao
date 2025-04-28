<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use App\Models\Vote;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function home () {
        $polls = Poll::orderBy('created_at', 'desc')->get();
        $currentDate = date('d/m/Y');
        return view('welcome', ['polls' => $polls, 'currentDate' => $currentDate]);
    }

    public function create () {
        return view('addPoll');
    }
    public function voting ($id) {
        $poll = Poll::find($id);
        if(empty($poll)) {
            return view('notFound');
        }
        $total = Vote::where('poll_id', $poll->id)->count();


        return view('voting', ['poll' => $poll, 'total' => $total]);
    }

    public function destroy($id) {
        try {
            Poll::destroy($id);
            return redirect()->route('home');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
