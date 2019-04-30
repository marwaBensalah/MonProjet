
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fonds de placements</div>

                <div class="card-body">
                    
                <h1>Liste des Fond de placement</h1>
                  <table class="table">
                    <tr>
                    <th>Fondateur</th>
                    <th>Denomination</th>
                    <th>Forme Juridique</th>
                   
                    <th>Categorie</th>
                    <th>Type OPVCM</th>
                    <th>Montant Souscrit</th>
                    <th>Nombre de parts</th>
                    
                    </tr>
                 @foreach(\App\FondPlacement::all() as $fond)
                  <tr>
                 <td>{{ $fond->Categorie }}</td>
                 <td>{{ $fond->TypeOPVCM }}</td>
                 <td>{{ $fond->MontantSouscrit }}</td>
                 <td>{{ $fond->NombrePart}}</td>
                 
                 

 
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
