@if (session('abonnement'))
<div class="alert alert-success">
    {{ session('abonnement') }}
</div>
@endif
@if (session('desabonner'))
<div class="alert alert-danger">
    {{ session('desabonner') }}
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-4">
            @include('partials.components.profilSide')
        </div>
        <div class="col-8">
            @include('partials.components.coursContent')
        </div>
    </div>
</div>