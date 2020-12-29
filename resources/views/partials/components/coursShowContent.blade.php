<div class="mt-5">
    <h2 style="color: #FA824C;">{{$show->nom}}</h2>
    <table class="table mt-5">
        <thead>
          <tr style="font-size: 20px;color: #FA824C; background-color: #E5E5E5; font-weight: bold">
            <th style="font-size: 25px" scope="col">cours</th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($fichiers as $fichier)
                @if ($fichier->matiere_id == $show->id)
                    <tr>
                        <td style="font-size: 20px">{{$fichier->nom}}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
      </table>
</div>