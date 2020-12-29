<div class="row mt-5">
    <div class="col-6">
        <h2 style="color: #fa824c">vos informations</h2>
        <form role="form" action="" method="POST">
            @csrf
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
              <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
    </div>
    <div class="col-6">

    </div>
</div>