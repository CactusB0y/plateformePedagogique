<div class="row mt-5">
    <div class="col-6">
        <h2 style="color: #fa824c">Vos informations</h2>
        <form role="form" action="/profil/{{Auth::user()->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" name="prenom" value="{{Auth::user()->prenom}}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" name="age" value="{{Auth::user()->age}}" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">nouveau Mot de passe</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1comfirm" class="form-label">comfirmer Mot de passe</label>
              <input type="password" name="passwordComfirm" class="form-control" id="exampleInputPassword1comfirm">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
    </div>
    <div class="col-6">
      <h2 style="color: #fa824c">Changer votre photo de profil</h2>
      <div class="row">
        <div class="col-6">
          <img height="150px" width="150px" class="mt-4 ml-3" style="border-radius: 50%" src="{{asset('img/'.Auth::user()->src)}}" alt="">
        </div>
        <div class="col-6">
          <form role="form" action="/editPicture/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mt-5">
              <label style="color: #fa824c" for="patchpicture">Téléverser une image</label>
              <input id="patchpicture" name="src" type="file">
              <button class="mt-3 btn btn-primary" type="submit">Modifier</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>