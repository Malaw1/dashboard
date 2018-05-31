@extends('layouts.adminLayout.admin_design')
@section('content')
 
<div id="content">

    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Equipement</a> <a href="#" class="current">Equipement: {{$equip->id}}</a> </div>
        <h1>{{$equip->id}}</h1>

    </div>
    <div class="container-fluid">
    </div>
</div>

@endsection