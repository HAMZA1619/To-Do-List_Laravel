@extends('header')
@section('contant')
    <h4 class="ml-5 mt-3"><a  href="/">Back</a></h4>
    <div class="container text-center">
       
        <h1>Edit a Tache </h1>
    <form class="w-50 m-auto input-group " action="../edit_submit/{{$TodoArr_tache->id}}">
            <input class="form-control" type="text" name="tache" value="{{$TodoArr_tache->tache}}" class='form-control'>
            <input type="submit"  class="btn mb-4 btn-outline-primary" value="Edit">
    </form>
    </div>
         
    @endsection
