
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Emprunt Emis</div>

                <div class="card-body">
                    
                <h1>Liste des Emprunts</h1>
                  <table class="table">
                    <tr>
                    <th>Compte</th>
                    <th>Denomination</th>
                    <th>Raison Social</th>
                    <th>Type</th>
                    <th>Nature</th>
                    <th>Categorie</th>
                    <th>Montant Emis</th>
                    <th>Detail</th>
                    <th></th>
                    </tr>
                 @foreach(\App\EmpruntEmis::all() as $emp)
                  <tr>
                 <td>{{ $emp->Compte }}</td>
                 <td>{{ $emp->Denomination }}</td>
                 <td>{{ $emp->raison_social }}</td>
                 <td>{{ $emp->Type }}</td>
                 <td>{{ $emp->Nature }}</td>
                 <td>{{ $emp->Categorie }}</td>
                 <td>{{ $emp->MonatntEmis }}</td>
                 <td><a href="#">{{ link_to_route('empruntE.index','Detail',null) }}</a>
                
                 

 
                 @endforeach
                </div>
            </div>
        </div>
    </div>
</div>





<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
