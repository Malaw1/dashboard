@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/stocks" title="Go to Stocks" class="tip-bottom"><i class="icon-home"></i> Stocks</a> <a href="#" class="current">Reactifs</a> </div>
    <h1>Gestion des Substances Pures</h1>
  </div>
  
  <div class="container-fluid">

  <div class="fr">
      <a href="/reactifs/create" class="btn btn-primary btn-large">Ajouter +</a>
  </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Reactifs</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Designation</th>
                  <th>Conditionnement</th>
                  <th>Num Lot</th>
                  <th>Fabriquant</th>
                  <th>Quantite</th>
                  <th>Date de Fab</th>
                  <th>Date de Peremp</th>
                  <th>Date de Recu</th>
                  <th>Utlise</th>
                  <th>Restants</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($reactifs as $reactifs )
                <tr class="odd gradeX">
                  <td>{{ $reactifs->id}}</td>
                  <td>{{ $reactifs->designation}}</td>
                  <td>{{ $reactifs->conditionnement}}</td>
                  <td>{{ $reactifs->lot}}</td>
                  <td>{{ $reactifs->fabriquant}}</td>
                  <td>{{ $reactifs->quantite}}</td>
                  <td>{{ $reactifs->dateFab}}</td>
                  <td>{{ $reactifs->dateExp}}</td>
                  <td>{{ $reactifs->created_at}}</td>
                  <td>{{ $reactifs->quantiteUtilise}}</td>                    
                  <td>{{ $reactifs->quantite - $reactifs->quantiteUtilise}}</td>
                  <td>
                    <div class="fr">
                      <a href="/reactifs/{{ $reactifs->id}}/edit" class="btn btn-primary btn-mini">Mod</a> <a href="/reactifs/{{ $reactifs->id}}" class="btn btn-success btn-mini">Voire</a> <a href="#" class="btn btn-danger btn-mini">Sup</a>
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