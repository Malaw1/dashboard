@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
        <h1>Gestion des Equipements</h1>
    </div>
    <div class="container-fluid">
    @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block" style="text-align: center;">
             <button type="button" class="close" data-dismiss="alert">×</button> 
             <strong>{!! session('flash_message_success') !!}</strong>
        </div>
        @endif
  <div class="fr">
      <a href="/equipements/create" class="btn btn-primary btn-large">Nouvel Enreg</a>
  </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Registre des Equipements</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                    <th>ID. </th>
                    <th>Appareil</th>
                    <th>Code</th>
                    <th>Fabricant</th>
                    <th>Date Prochaine Qualification</th>
                    <th>Etat</th>
                    <th>Emplacement</th>
                    <th>Commentaires</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($equip as $equip)
                <tr class="odd gradeX">
                    <td>{{$equip->id}}</td>
                    <td><a href="/equipements/{{$equip->id}}">{{$equip->appareil}}</a></td>
                    <td>{{$equip->code}}</td>
                    <td>{{$equip->fabricant}}</td>
                    <td>{{$equip->dateQualification}}</td>
                    <td>{{$equip->etat}}</td>
                    <td>{{$equip->salle}}</td>
                    <td>{{$equip->commentaires}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>

          </div>
        </div>
</div>
@endsection