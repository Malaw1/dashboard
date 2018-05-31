@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Personnel" class="tip-bottom"><i class="icon-home"></i> Gestion du Personnel</a> <a href="#" class="current">Unites Techniques</a> </div>
    <h1>Unites Techniques</h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Consulter la liste du personel</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Label</th>
                  <th>Postes</th>
                  <th>Chef d'Unites</th>
                  <th>Nombre d'agent</th>
                  <th>Consulter</th>
                </tr>
              </thead>
              <tbody>
              {{-- @foreach ($users as $users )
                  <tr class="odd gradeX">
                  <td>{{ $users->id}}</td>
                  <td>{{ $users->fname}}</td>
                  <td>{{ $users->lname}}</td>
                  <td>{{ $users->email}}</td>
                  <td>{{ $users->created_at}}</td>
                  <td>{{ $users->label}}</td>
                  <td>
                    <div class="fr">
                        <a href="/users/{{ $users->poste_id}}" class="btn btn-success btn-mini">Fiche Personnel</a>
                      </div>
                  </td>
                  
                </tr>
              @endforeach --}}
                
              </tbody>
            </table>

@endsection