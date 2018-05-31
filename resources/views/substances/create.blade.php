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
            <h5>Ajouter un nouveau Reactif</h5>
            </div>
            <div class="widget-content nopadding">
            <form action="{{ route('reactifs.store')}}" method="post" class="form-horizontal">
                {{ csrf_field()}}
                <div class="control-group">
                <label class="control-label">Designation :</label>
                <div class="controls">
                    <input type="text" class="span11 form-control" required placeholder="Designation" name="designation" spellcheck="false"  />
                </div>
                </div>
                <div class="control-group">
                <label class="control-label">Conditionnement :</label>
                <div class="controls">
                    <input type="text" class="span11 form-control" required placeholder="Conditionnement" name="conditionnement" spellcheck="false"  />
                </div>
                </div>
                <div class="control-group">
                <label class="control-label">Numero Lot</label>
                <div class="controls">
                    <input type="text" class="span11 form-control" required placeholder="Lot" name="lot" spellcheck="false" />
                </div>
                </div>
                <div class="control-group">
                <label class="control-label">Fabriquant :</label>
                <div class="controls">
                    <input type="text" class="span11 form-control" required placeholder="fabriquant" name="fabriquant" spellcheck="false"  />
                </div>
                </div>
                <div class="control-group">
                <label class="control-label">Quantite :</label>
                <div class="controls">
                    <input type="number" class="span11 form-control" required placeholder="Quantite" name="quantite" spellcheck="false"  />
                </div>
                </div>

                <div class="control-group">
                <label class="control-label">Date de Fabrication :</label>
                <div class="controls">
                    <input type="date" class="span11 form-control" required placeholder="Date de Fab" name="dateFab" spellcheck="false" />
                </div>
                </div>

                <div class="control-group">
                <label class="control-label">Date de peremption :</label>
                <div class="controls">
                    <input type="date" class="span11 form-control" required placeholder="Date de Premption" name="dateExp" spellcheck="false" />
                </div>
                </div>

                <div class="control-group">
                <label class="control-label">Date de reception :</label>
                <div class="controls">
                    <input type="date" class="span11 form-control" required placeholder="Date de Reception" name="created_at" spellcheck="false" />
                </div>
                </div>

                <div class="control-group">
                <label class="control-label">Nombre Utilise :</label>
                <div class="controls">
                    <input type="number" class="span11 form-control" required placeholder="Quantite Utilise" name="quantiteUtilise" spellcheck="false" />
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
</div>

@endsection