@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">STB BANK DIRECTION TITRES ET PLACEMENTS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="list-group">
  <a href="#">{{ link_to_route('empruntE.store','Emprunts Emis',null) }}</a>
  <a href="#">Emprunts Souscrits</a>
  <a href="#">Fonds de Placements</a>
  <a href="#">Notifications</a>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
