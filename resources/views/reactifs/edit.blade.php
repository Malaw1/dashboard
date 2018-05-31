@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="{{('/reactifs')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Gestion Stock</a> <a href="#" class="tip-bottom">Reactifs</a> <a href="#" class="current">Modifier</a> </div>
  <h1>Reactifs</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span8">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Modifier le Reactifs N°: {{$reactif->id}}</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route('reactifs.update', [$reactif->id])}}" method="post" class="form-horizontal">
            {{ csrf_field()}}
            <input type="hidden" name="_method" value="put" />
            <div class="control-group">
              <label class="control-label">Designation :</label>
              <div class="controls">
                <input type="text" class="span11 form-control" required placeholder="Designation" name="designation" spellcheck="false" value="{{ $reactif->designation}}"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Conditionnement :</label>
              <div class="controls">
                <input type="text" class="span11 form-control" required placeholder="Conditionnement" name="conditionnement" spellcheck="false" value="{{ $reactif->conditionnement}}"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Numero Lot</label>
              <div class="controls">
                <input type="text" class="span11 form-control" required placeholder="Lot" name="lot" spellcheck="false" value="{{ $reactif->lot}}"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Fabriquant :</label>
              <div class="controls">
                <input type="text" class="span11 form-control" required placeholder="fabriquant" name="fabriquant" spellcheck="false" value="{{ $reactif->fabriquant}}"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Quantite :</label>
              <div class="controls">
                <input type="number" class="span11 form-control" required placeholder="Quantite" name="quantite" spellcheck="false" value="{{ $reactif->quantite}}"  />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Date de Fabrication :</label>
              <div class="controls">
                <input type="date" class="span11 form-control" required placeholder="Date de Fab" name="dateFab" spellcheck="false" value="{{ $reactif->dateFab}}"  />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Date de peremption :</label>
              <div class="controls">
                <input type="date" class="span11 form-control" required placeholder="Date de Premption" name="dateExp" spellcheck="false" value="{{ $reactif->dateExp}}"  />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Date de reception :</label>
              <div class="controls">
                <input type="hidden" class="span11 form-control" required placeholder="Date de Reception" name="created_at" spellcheck="false" value="{{ $reactif->created_at}}"  />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Nombre Utilise :</label>
              <div class="controls">
                <input type="number" class="span11 form-control" required placeholder="Quantite Utilise" name="quantiteUtilise" spellcheck="false" value="{{ $reactif->quantiteUtilise}}"  />
              </div>
            </div>

            
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

@endsection