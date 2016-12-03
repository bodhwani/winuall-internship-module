<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

use App\Http\Requests;

class AnswerController extends Controller
{
    public function showans(Request $request, Question $question){

        $answer = new Answer;
        $answer->body = $request->body;
        $question->answers()->save($answer);

        return back();
    }
}
