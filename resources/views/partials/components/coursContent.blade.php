<div style="color: #FA824C; font-weight: bold" class="mt-5">
    <h1>Liste des cours</h1>
</div>

@foreach ($matieres as $matiere)
    <div class="card bg-transparent mt-5" style="width: 60rem;">
        <div class="alert mb-0" style="font-size: 20px;color: #FA824C; background-color: #E5E5E5; font-weight: bold">{{$matiere->nom}}</div>
        <div class="card-body d-flex justify-content-end" style="background-color: #font-weight: bold">
            <div class="row">
                <div class="col-8">
                    <p><i>"{{$matiere->description}}"</i></p>
                </div>
                <div class="col-4">
                    {{-- {{dd($matiere->matiere_user->first()->user_id == Auth::id())}} --}}
                    
                        @if (isset($matiere->matiere_user->first()->user_id) && $matiere->matiere_user->first()->user_id == Auth::id())
                            <p>ca marche</p>
                            @else
                            <form action="/addMatiere/{{Auth::user()->id}}" method="POST">
                                @csrf
                                <input type="text" name="matiere_id" value="{{$matiere->id}}" class="d-none">
                                <button type="submit" class="btn btn-success ml-2">suivre ce cours</button>
                            </form>
                        @endif
                    
                    <a href="/matiere/{{$matiere->id}}" class="btn btn-primary ml-2">voir le cours</a>
                </div>
            </div>
        </div>
    </div>
@endforeach