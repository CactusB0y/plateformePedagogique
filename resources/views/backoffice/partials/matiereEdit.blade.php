@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Matière</h1>
@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Modification d'une Matiere</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/matiere/{{$edit->id}}" method="post">
            @csrf
            @method('PATCH')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nom</label>
              <input type="text" name="nom" value="{{$edit->nom}}" class="form-control" id="exampleInputEmail1" placeholder="Nom de la matière">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
@stop