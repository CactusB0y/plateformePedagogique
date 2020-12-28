@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Matière</h1>
@stop

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('storeMatiere'))
<div class="alert alert-success">
    {{ session('storeMatiere') }}
</div>
@endif
@if (session('updateMatiere'))
<div class="alert alert-primary">
    {{ session('updateMatiere') }}
</div>
@endif
@if (session('deleteMatiere'))
<div class="alert alert-danger">
    {{ session('deleteMatiere') }}
</div>
@endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="">
                    <table class="table">
                        <thead class="table-primary">
                          <tr>
                            <th scope="col">nom</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($matieres as $matiere)
                                <tr>
                                    <td scope="row">{{$matiere->nom}}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="matiere/{{$matiere->id}}/edit" class="btn btn-info mr-1"><i class="fas fa-eye"></i></a>
                                            <form action="/matiere/{{$matiere->id}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><a ><i class="fas fa-trash"></i></a></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">ajouter une Matiere</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/matiere" method="post">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nom</label>
              <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Nom de la matière">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
@stop