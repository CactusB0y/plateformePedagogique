@if (Auth::check())
    <div class="card bg-transparent mt-5" style="width: 22rem;">
        <div class="card-body">
            <img style="height: 150px;width: 150px; border-radius: 50%" class="imgProfil" src="{{asset("img/".Auth::user()->src)}}" alt="">
        </div>
    </div>
    @else
    <div class="card bg-transparent mt-5" style="width: 22rem;">
        <div class="card-body">
            <p><a href="/login">se connecter</a></p>
        </div>
    </div>
@endif
<div class="card bg-transparent mt-5" style="width: 22rem;">
    <div class="alert alert-secondary" style="font-size: 20px">Profil</div>
    <div class="card-body">
      <ul style="list-style: none">
          <li class="mb-3"><img style="height: 20px; margin-right: 20px" src="{{asset('img/icon/notebook.PNG')}}" alt=""><a href="/mesCours" style="font-size: 18px">Mes cours</a></li>
          <li class="mb-3"><img style="height: 20px; margin-right: 20px" src="{{asset('img/icon/user.PNG')}}" alt=""><a href="/profil" style="font-size: 18px">Éditer Profil</a></li>
      </ul>
    </div>
</div>