
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Emprunts Souscrits</div>

                <div class="card-body">
                    
                <h1>Liste des Emprunts</h1>
                  <table class="table">
                    <tr>
                    <th>Compte</th>
                    <th>Denomination</th>
                    <th>Type</th>
                    <th>Nature</th>
                    <th>Categorie</th>
                    <th>Montant Souscrit</th>
                    <th>Valeur Nominal</th>
                    </tr>
                 @foreach(\App\EmpruntSouscrit::all() as $emp)
                  <tr>
                 <td>{{ $emp->Compte }}</td>
                 <td>{{ $emp->Denomination }}</td>
                 <td>{{ $emp->Type }}</td>
                 <td>{{ $emp->Nature }}</td>
                 <td>{{ $emp->Categorie }}</td>
                 <td>{{ $emp->MonatntSouscrit }}</td>
                 <td>{{ $emp->ValeurNominal }}</td>
                 

 
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
