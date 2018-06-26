@extends('layouts.adminLayout.admin_design')
@section('content')

<div class="page-header">
    <h1>
        Reactifs
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Nouvel Enregistrement
        </small>
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        
    <form action="{{ route('reactifs.store')}}" method="post" class="form-horizontal">
        {{ csrf_field()}}
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Designation </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" name="designation" placeholder="Designation" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Autres Noms </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" name="Nomscommerciaux" placeholder="Noms Commerciaux" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Apparence </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" name="apparence" placeholder="Apparence" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Conditionnement </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" name="conditionnement" placeholder="Conditionnement" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lot </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" name="lot" placeholder="Lot" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Fabricant </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" name="fabricant" placeholder="Fabricant" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Numero EINECS </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" name="numEINECS" placeholder="Numero  Européen des Substances chimiques Commerciales Existantes (EINECS)." class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Numero ECHA </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" name="numECHA" placeholder="Numero ECHA" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Numero CAS </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" name="numCAS" placeholder="Numero CAS" class="col-xs-10 col-sm-5" />
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Quantite </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" name="quantite" placeholder="Quantite" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date de Fabrication </label>

            <div class="col-sm-9">
                <input type="date" id="form-field-1" name="dateFab" placeholder="dateFab" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date de Peremption </label>

            <div class="col-sm-9">
                <input type="date" id="form-field-1" name="dateExp" placeholder="Date de Peremption" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date de Reception </label>

            <div class="col-sm-9">
                <input type="date" id="form-field-1" name="created_at" placeholder="Date de Reception" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    Enregistrer
                </button>

                &nbsp; &nbsp; &nbsp;
                <button class="btn" type="reset">
                    <i class="ace-icon fa fa-undo bigger-110"></i>
                    Reset
                </button>
            </div>
        </div>
    
    </form>
</div>

@endsection