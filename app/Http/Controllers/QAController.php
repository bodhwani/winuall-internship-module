<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Question;

class QAController extends Controller
{
    public function index(){

        $questions = Question::all();

        return view('questions.index', compact('questions'));
    }

    public function show(Question $question){

        return view('questions.show', compact('question'));
    }

    public function addQ(Request $request)
    {
        return $request->all();

    }
}
