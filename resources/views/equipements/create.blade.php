@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
        <h1>Enregistrement de Materiels</h1>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span8">
                <div class="widget-box">
                    <div class="widget-content nopadding">
                        <form action="{{ route('equipements.store')}}" method="post" class="form-horizontal">
                            {{ csrf_field()}}
                            
                            <div class="control-group">
                                <label class="control-label">Nom de l'appareil</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Appareil" name="appareil" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Code</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Code" name="code" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Fabricant</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Fabricant" name="fabricant" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Type</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control"  placeholder="Type" name="type" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Numero de Serie</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="N° Serie" name="serie" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Societe a Contacter</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control"  placeholder="Societer a contacter" name="societeContacter" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Date d'installation</label>
                                <div class="controls">
                                    <input type="date" class="span6 form-control" required placeholder="Date d'installation " name="dateInstallation" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Document Technique utilisation disponible</label>
                                <div class="controls">
                                    <select class="span6" required name="documentTechDispo">
                                        <option selected>Oui</option>
                                        <option>Non</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Fonctionnement</label>
                                <div class="controls">
                                    <select class="span6" required name="etat">
                                        <option selected>Fonctionnel</option>
                                        <option>Non Fonctionnel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Date Prochaine Qualification</label>
                                <div class="controls">
                                    <input type="date" class="span6 form-control" placeholder="Emplacement" name="dateQualification" spellcheck="false" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Emplacement</label>
                                <div class="controls">
                                    <input type="text" class="span6 form-control" required placeholder="Emplacement" name="salle" spellcheck="false" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Commentaires</label>
                                <div class="controls">
                                    <textarea type="text" class="span6 form-control" required placeholder="Commentaires" name="commentaire" spellcheck="false"></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection

