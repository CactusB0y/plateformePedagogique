@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Fichiers</h1>
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
@if (session('storeFichier'))
<div class="alert alert-success">
    {{ session('storeFichier') }}
</div>
@endif
@if (session('updateFichier'))
<div class="alert alert-primary">
    {{ session('updateFichier') }}
</div>
@endif
@if (session('deleteFichier'))
<div class="alert alert-danger">
    {{ session('deleteFichier') }}
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
                            <th scope="col">src</th>
                            <th scope="col">matière</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($fichiers as $fichier)
                                <tr>
                                    <td scope="row">{{$fichier->nom}}</td>
                                    <td scope="row">{{$fichier->src}}</td>
                                    <td scope="row">{{$fichier->matieres->nom}}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="fichier/{{$fichier->id}}/edit" class="btn btn-info mr-1"><i class="fas fa-eye"></i></a>
                                            <form action="/fichier/{{$fichier->id}}" method="POST">
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
          <h3 class="card-title">ajouter un Fichier</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/fichier" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nom</label>
              <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Nom du fichier">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">téléverser le fichier</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="src" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choisir un fichier</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Séléctionner une matière</label>
                <select name="matiere_id" class="form-control">
                    @foreach ($matieres as $matiere)
                        <option value="{{$matiere->id}}">{{$matiere->nom}}</option>   
                    @endforeach
                </select>
              </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
@stop