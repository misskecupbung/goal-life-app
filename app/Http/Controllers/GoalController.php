<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goal;

class GoalController extends Controller
{
    public function index()
    {
        $goals = Goal::all();
        $data = [
            'goals' => $goals
        ];
        
        return view ('goals.index', $data);
    }

    public function create()
    {
        return view('goals.create');
    }

    public function store(Request $request)
    {
        Goal::create($request->all());

        return redirect('/');
    }

    public function edit(Goal $goal)
    {
        return view('goals.edit', compact('goal'));
    }

    public function update(Request $request, Goal $goal)
    {
        $goal->update($request->all());

        return redirect('/');
    }

    public function delete(Goal $goal)
    {
        $goal->delete();

        return redirect('/');
    }
}
