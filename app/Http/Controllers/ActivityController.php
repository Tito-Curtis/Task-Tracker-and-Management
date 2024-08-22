<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Activity;

class ActivityController extends Controller
{
   
    public function index(Request $request):View
    {
        $query = Activity::query();

        
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->input('search') . '%');
        }
    
        
        $activities = $query->get();
    
       
        return view('activities.index', [
            'activities' => $activities,
            'title' => 'All Activities'
        ]);
        
    }
    public function pending()
    {
        $activities = Activity::where('status', 'pending')->get();
        return view('activities.index', [
            'activities' => $activities,
            'title' => 'Pending Activities'
        ]);
    }
    public function completed()
    {
        $activities = Activity::where('status', 'done')->get();
        return view('activities.index', [
            'activities' => $activities,
            'title' => 'Completed Activities'
        ]);
    }
    public function layout():View
    {
       
        return view('activities.layout');
    }

    public function create():View
    {
        return view('activities.create');
    }

    
    public function store(Request $request):RedirectResponse
    {
        
        $data = $request->all();
        $userId = auth()->id();
        
        $input=array_merge($data, ['user_id' => $userId]);
        Activity::create($input);
        return redirect('activity')->with('flash_message', 'Activity Addedd!');
    }

    
    public function show(string $id)
    {
        $activities = Activity::find($id);
      
        return view('activities.show')->with('activities', $activities);
    }

    public function edit(string $id)
    {
        $activities = Activity::find($id);
        return view('activities.edit')->with('activities', $activities);
    }

   
    public function update(Request $request, string $id):RedirectResponse
    {
        $activities = Activity::find($id);
        $input = $request->all();
        $activities->update($input);
        return redirect('activity')->with('flash_message', 'Task Updated!'); 
    }

   
    public function destroy(string $id):RedirectResponse
    {
        Activity::destroy($id);
        return redirect('activity')->with('flash_message', 'Student deleted!');
    }
}
