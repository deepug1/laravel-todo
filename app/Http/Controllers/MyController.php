<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return view('index',[
            // 'todos' => Todo::latest()->paginate()
            'todos' => Todo::latest()->get()
        ]);
    }

    public function create(Request $request){
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->save();
        return redirect()->route('index');
    }
    
    public function delete($id){
        Todo::destroy($id);
        return redirect()->route('index');
    }

    public function complete($id){
        $todo = Todo::find($id);
        $todo->completed = true;
        $todo->save();
        return redirect()->route('index');
    }

    public function incomplete($id){
        $todo = Todo::find($id);
        $todo->completed = false;
        $todo->save();
        return redirect()->route('index');
    }
    

}