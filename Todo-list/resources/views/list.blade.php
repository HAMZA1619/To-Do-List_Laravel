@extends('header')
@section('contant')
    <!-- Add --------------------------->
    <div class="container text-center">
    <h1 >To Do list</h1>
    <form class="w-50 m-auto input-group "  action="create">
            <input class="form-control" type="text" name="tache" placeholder="Enter to do list" class='form-control' required>
            <input type="submit" value="Add"  class="btn mb-4 btn-outline-dark">
    </form>

    <!-- show ------------------>
    </div>
   
            <table class="table table-hover table-success table-striped">
                <tr>
                    <th>Id</th>
                    <th >Tache</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>

                @foreach($TodoArr as $todo)
                <tr>
                    <td>{{$todo->id}}</td>
                    <td>{{$todo->tache}}</td>
                    <td>{{$todo->created_at}}</td>
                    <td><a href="delete/{{$todo->id}}">Delete</a> | <a href="edit/{{$todo->id}}">Edit</a> </td>
                </tr>

                     
                @endforeach
            
            </table>
    

            @endsection
