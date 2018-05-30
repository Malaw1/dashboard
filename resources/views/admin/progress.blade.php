@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="/stocks" title="Go to Stocks" class="tip-bottom"><i class="icon-home"></i> Stocks</a> <a href="#" class="current">Reactifs</a> </div>
    <h1>Gestion des Substances Pures</h1>
  </div>
  
  <div class="container-fluid">

    <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
            <h5>Progression des Taches</h5>
          </div>
          <div class="widget-content">
            <ul class="unstyled">
              <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> Dashboard <span class="pull-right strong">60%</span>
                <div class="progress progress-success progress-striped ">
                  <div style="width: 60%;" class="bar"></div>
                </div>
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> Gestion des Demandes et des Echantillons <span class="pull-right strong">50%</span>
                <div class="progress progress-striped ">
                  <div style="width: 50%;" class="bar"></div>
                </div>
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-down-2 red"></span> Gestion du Stock <span class="pull-right strong">80%</span>
                <div class="progress progress-success progress-striped ">
                  <div style="width: 80%;" class="bar"></div>
                </div>
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> Gestion des Analyses <span class="pull-right strong">1%</span>
                <div class="progress progress-danger progress-striped ">
                  <div style="width: 1%;" class="bar"></div>
                </div>
                <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> Gestion des Equipements <span class="pull-right strong">0%</span>
                <div class="progress progress-danger progress-striped ">
                  <div style="width: 0%;" class="bar"></div>
                </div>
              </li>
              <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> Gestion des Utilisateurs <span class="pull-right strong">20%</span>
                <div class="progress progress-warning progress-striped ">
                  <div style="width: 20%;" class="bar"></div>
                </div>
                </li>
                <li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> Gestion de la Messagerie <span class="pull-right strong">20%</span>
                <div class="progress progress-warning progress-striped ">
                  <div style="width: 0%;" class="bar"></div>
                </div>
                </li>
            </ul>
          </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection