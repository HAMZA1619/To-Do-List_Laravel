<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    public function showAllData(){
        return view('list')->with('TodoArr',todo::all());
        // return 'hello';
    }


    public function delete($id){
        todo::destroy(array('id',$id));
        return redirect('/');
    }

 

    public function create(Request $req){
        

        $todo = new todo;
        $todo->tache = $req->input('tache');
        $todo->save();
        return redirect('/');
    }

    public function edit($id){
          
        return view('edit')->with('TodoArr_tache',todo::find($id));
   }

    public function edit_submit(Request $req, $id){

       
         $todo = todo::find($id);
         $todo->tache = $req->input('tache');
         $todo->save();
         return redirect('/');
    }

}
