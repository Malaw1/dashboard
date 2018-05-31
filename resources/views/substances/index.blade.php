@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/stocks" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Gestion de stock</a> <a href="#" class="current">Substances Pures</a> </div>
    <h1>Gestion des Substances Pures</h1>
  </div>
  <div class="container-fluid">
  <div class="fr">
      <a href="/substances/create" class="btn btn-primary btn-large">Ajouter Substances +</a>
  </div>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Substances Pures</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Designation</th>
                  <th>Conditionnement</th>
                  <th>Quantite</th>
                  <th>Num Lot</th>
                  <th>Date de Peremp</th>
                  <th>Fabricant</th>
                  <th>Date de Recu</th>
                  <th>Utlise</th>
                  <th>Restant</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($substance as $substance )
                <tr class="odd gradeX">
                    <td>{{ $substance->id}}</td>
                    <td>{{ $substance->designation}}</td>
                    <td>{{ $substance->conditionnement}}</td>
                    <td>{{ $substance->quantiteRecue}}</td>
                    <td>{{ $substance->lot}}</td>
                    <td>{{ $substance->dateExp}}</td>
                    <td>{{ $substance->fabricant}}</td>
                    <td>{{ $substance->dateRecu}}</td>
                    <td>{{ $substance->utilise}}</td>
                    <td>{{ $substance->restant}}</td>
                    <td>
                        <div class="fr">
                            <a href="/substances/{{ $substance->id}}/edit" class="btn btn-primary btn-mini">Mod</a> <a href="/substances/{{ $substance->id}}" class="btn btn-success btn-mini">Voire</a> <a href="#" class="btn btn-danger btn-mini">Sup</a>
                        </div>
                    </td>
                </tr>
              @endforeach
                
              </tbody>
            </table>

          </div>
        </div>
        
</div> </div> </div> </div>

@endsection