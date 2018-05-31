@extends('layouts.adminLayout.admin_design')
@section('content')


<div class="page-header">
    <h1>
        Appareil
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Nouvel Enregistrement
        </small>
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        
    <form action="{{ route('equipement.store')}}" method="post" class="form-horizontal">
        {{ csrf_field()}}
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Appareil </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" name="appareil" placeholder="Appareil" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Code </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" placeholder="code" name="code" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Fabricant </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" placeholder="fabricant" name="fabricant" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Type </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" placeholder="type" name="type" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> N° de Serie </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" placeholder="serie" name="serie" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date d'installation </label>

            <div class="col-sm-9">
                <input type="date" id="form-field-1" name="dateInstallation" class="col-xs-10 col-sm-5" />
                
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Fonctionnement </label>

            <div class="col-sm-9">
                <select class="" id="form-field-select-4" name="fonctionnement" data-placeholder="Choose a State...">
                    <option value="AL">Oui</option>
                    <option value="AK">Non</option>
                    <option value="AZ">Installé</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Emplacement </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" placeholder="Emplacement" name="salle" class="col-xs-10 col-sm-5" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Document Technique disponible </label>

            <div class="col-sm-9">
                <div class="radio">
                    <label>
                        <input name="documentTechDispo" type="radio" class="ace" />
                        <span class="lbl"> Oui</span>
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input name="documentTechDispo" type="radio" class="ace" />
                        <span class="lbl"> Non</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Commentaires </label>

            <div class="col-sm-9">
                <textarea type="" name="commentaires" id="form-field-1" placeholder="Emplacement" class="col-xs-10 col-sm-5"></textarea>
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