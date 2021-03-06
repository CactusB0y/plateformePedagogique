<div style="color: #FA824C; font-weight: bold" class="mt-5">
    <h1>Liste des cours</h1>
</div>

@foreach ($matieres as $matiere)
    <div class="card bg-transparent mt-5" style="width: 60rem;">
        <div class="alert mb-0 d-flex justify-content-between" style="font-size: 20px;color: #FA824C; background-color: #E5E5E5; font-weight: bold">
            <span>{{$matiere->nom}}</span>
            <form action="/detachMatiere/{{Auth::user()->id}}" method="POST">
                @csrf
                <input type="text" name="matiere_id" value="{{$matiere->id}}" class="d-none">
                <button type="submit" class="btn btn-danger ml-2">se désabonner</button>
            </form>
        </div>
        <div class="card-body" style="background-color: #font-weight: bold">
            <div class="row">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">nom</th>
                        <th scope="col"> </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($fichiers as $fichier)
                            @if ($fichier->matiere_id == $matiere->id)
                                <tr>
                                    <td class="w-75">{{$fichier->nom}}</td>
                                    <td>
                                        <a class="btn btn-success" href="/download/{{$fichier->id}}">Télécharger</a>
                                    </td>
                                </tr>   
                            @endif
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endforeach