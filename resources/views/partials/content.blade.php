@if (session('authMSG'))
<div class="alert alert-success">
    {{ session('authMSG') }}
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-4">
            @include('partials.components.profilSide')
        </div>
        <div class="col-8 text-center">
            @include('partials.components.welcomeContent')
        </div>
    </div>
</div>