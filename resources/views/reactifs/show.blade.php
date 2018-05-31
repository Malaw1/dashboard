@extends('layouts.adminLayout.admin_design')
@section('content')


<div id="content">
    <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Retouner vers Reactifs" class="tip-bottom"><i class="icon-home"></i> Reactifs</a> <a href="#" class="current">Reactifs N°: </a> </div>
    @foreach ($react as $react )
            <input type="hidden" value="{{$react}}" />
            @endforeach
    <h1>{{$react->designation}}</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-briefcase"></i> </span>
            <h5 >Fiche Scientifique</h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span4">
                <table class="">
                  <tbody>
                    <tr>
                      <td><h4>Stock</h4></td>
                    </tr>
                    <tr>
                      <td>Conditionnement: {{$react->conditionnement}}</td>
                    </tr>
                    <tr>
                      <td>Lot: {{$react->lot}}</td>
                    </tr>
                    <tr>
                      <td>Fabricant: {{$react->fabricant}}</td>
                    </tr>
                    <tr>
                      <td >Quantite: {{$react->quantite}}</td>
                    </tr>
                    <tr>
                      <td >Date de Fabricantion: {{$react->dateFab}}</td>
                    </tr>
                    <tr>
                      <td >Date de Peremption: {{$react->dateExp}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <div class="span4">
                <table class="table table-bordered table-invoice">
                  <tbody>
                    <tr>
                    <tr>
                      <td class="width30">Formule Brute:</td>
                      <td class="width70"><strong>{{ $react->formuleBrute}}</strong></td>
                    </tr>
                    <tr>
                      <td>Moment Dipolaire: </td>
                      <td><strong>{{ $react->momentDipolaire}}</strong></td>
                    </tr>
                    <tr>
                      <td>Diametre Moleculaire:</td>
                      <td><strong>{{ $react->diametreMoleculaire}}</strong></td>
                    </tr>
                  <td class="width30">Masse Molaire:</td>
                    <td class="width70"><strong>{{ $react->masseMolaire}}.</strong></td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>

              <div class="span4">
                  <img class="img-responsive" src="{{asset('images/reactifs/Acetonitrile.png')}}" />
              </div>
            </div>
            <hr />
            <div class="row-fluid">
              <div class="span12">
                <table class="table table-bordered table-invoice">
                  <tbody>
                  <thead>
                      <td><strong>Proprietes Physiques</strong></td>
                  </thead>
                    <tr>
                        <tr>
                          <td class="">Temps de Fusion</td>
                          <td class=""><strong>{{$react->tempFusion}}</strong></td>
                        </tr>
                        <tr>
                          <td>Temps d'ebulution</td>
                          <td><strong>{{$react->tempEbulition}}</strong></td>
                        </tr>
                        <tr>
                          <td>Solubilite</td>
                          <td><strong>{{$react->solubilite}}</strong></td>
                        </tr>

                        <tr>
                          <td>Parametre de Solubilite</td>
                          <td><strong>{{$react->parametreDeSolubilite}}</strong></td>
                        </tr>
                        <tr>
                          <td>Masse volumique</td>
                          <td><strong>{{$react->masseVolumique}}</strong></td>
                        </tr>
                        <tr>
                          <td>Temps d'auto inflamation</td>
                          <td><strong>{{$react->tempAutoInflamation}}</strong></td>
                        </tr>
                        <tr>
                          <td>Point Ecart</td>
                          <td><strong>{{$react->pointEcart}}</strong></td>
                        </tr>
                        <tr>
                          <td>Limite d'Explosivite dans l'air</td>
                          <td><strong>{{$react->limitesExplosiviteAir}}</strong></td>
                        </tr>
                        <tr>
                          <td>Pression Vapeur Saturante</td>
                          <td><strong>{{$react->pressionVapeurSaturante}}</strong></td>
                        </tr>
                        <tr>
                          <td>Viscosite Dynamique</td>
                          <td><strong>{{$react->ViscositeDynamique}}</strong></td>
                        </tr>
                        <tr>
                          <td>Point Critique</td>
                          <td><strong>{{$react->pointCritique}}</strong></td>
                        </tr>
                    </tr>
                    </tbody>
                  
                </table>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection