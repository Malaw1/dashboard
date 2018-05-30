@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
 <div id="content-header">
		<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Echantillons</a> <a href="#" class="current">Consulter</a></div>
		<h1>Echantillons</h1>
		@if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block" style="text-align: center;">
             <button type="button" class="close" data-dismiss="alert">×</button> 
             <strong>{!! session('flash_message_error') !!}</strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block" style="text-align: center;">
             <button type="button" class="close" data-dismiss="alert">×</button> 
             <strong>{!! session('flash_message_success') !!}</strong>
        </div>
    @endif
	</div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Consulter la liste des échantillons</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th><strong>ID</strong></th>
                  <th><strong>Date Reçu</strong></th>
                  <th><strong>Nom Produit</strong></th>
                  <th><strong>Forme Galenique</strong></th>
                  <th><strong>Quantité Reçu</strong></th>
                  <th><strong>Quantité Livrée</strong></th>
                  <th><strong>Nom fournisseur</strong></th>
                  <th><strong>Date fabrication</strong></th>
                  <th><strong>Date Péremption</strong></th>
                  <th><strong>Action</strong></th>
                </tr>
              </thead>
              <tbody>
              	@foreach($echantillons as $echantillon)
                <tr class="gradeU">
                  <td>{{ $echantillon->id }}</td>
                  <td>{{ $echantillon->dateRecu }}</td>
                  <td>{{ $echantillon->nomProduit }}</td>
                  <td>{{ $echantillon->formeGalenique }}</td>
                  <td>{{ $echantillon->quantiteRecu }}</td>
                  <td>{{ $echantillon->quantiteLivree }}</td>
                  <td>{{ $echantillon->fournisseur }}</td>
                  <td>{{ $echantillon->dateFab }}</td>
                  <td>{{ $echantillon->dateExp }}</td>
                  <td class="center"><a href="{{ url('/admin/modifier-echantillon/' .$echantillon->id) }}" class="btn btn-primary btn-mini">Modifier</a> <a href="#" class="btn btn-danger btn-mini">Supprimer</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection