@extends('layouts.adminLayout.admin_design')
@section('content')

<div class="page-header">
    <h1>
        Echantillons
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Nouvel Enregistrement
        </small>
    </h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<form class="form-horizontal" role="form" method="post" action="{{ route('echantillons.store')}}" name="add_echan" id="add_echan" novalidate="novalidate"> {{ csrf_field() }}

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nom du Produit </label>

				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="nomProduit" value="{{$echantillons->nomProduit}}" class="col-xs-10 col-sm-5" />
				</div>
			</div>


			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date de Reception </label>
		<div class="col-sm-9">
					<input type="date" id="form-field-1" name="dateRecep" class="col-xs-10 col-sm-5" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Type </label>

				<div class="col-sm-9">
					<select onchange="yesnoCheck(this);" name="type" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choisir un type">
						<option value="">  </option>
						<option value="medicament">Medicament</option>
						<option value="vaccin">Vaccin</option>
						<option value="autre">Autre</option>
					</select>
				</div>
			</div>

      <div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Code </label>

				<div class="col-sm-9">
					<input type="text" id="demo" name="code" class="col-xs-10 col-sm-5" />
				</div>
      </div>
      
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Forme Galenique </label>

				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="formeGalenique" class="col-xs-10 col-sm-5" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Conditionnement </label>

				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="conditionnement" class="col-xs-10 col-sm-5" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Quantite </label>

				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="quantiteRecu" class="col-xs-10 col-sm-5" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date de Fabrication </label>

				<div class="col-sm-9">
					<input type="date" id="form-field-1" name="dateFab" class="col-xs-10 col-sm-5" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date de Peremption </label>

				<div class="col-sm-9">
					<input type="date" id="form-field-1" name="dateExp" class="col-xs-10 col-sm-5" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lieu de Prelevement </label>

				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="lieuPrelevement" class="col-xs-10 col-sm-5" />
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
<div>


</div><div id="content">
<div class="modal fade" id="addclient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouveau client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nom</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Téléphone</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Mail</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Adresse</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn" style="background-color: #17b762; color: #fff">Ajouter</button>
      </div>
    </div>
  </div>
</div>
<script>
	$('#addclient').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>

<script>
    function yesnoCheck(that) {

        if (that.value == "medicament") {

           // .toString().substr(-2)
            
            var d = new Date();
            var n = d.getYear().toString().substr(-2);
            var v = "M"+n + "{{$echantillons['id'] + 1}}"
            document.getElementById("demo").value = v;
        }
        else if (that.value == "vaccin") {
            
            var d = new Date();
            var n = d.getYear().substr(-2);
            var v = "V"+n + "{{$echantillons['id'] + 1}}"
            document.getElementById("demo").value = v;
        }
         else if (that.value == "autre"){
            
            var d = new Date();
            var n = d.getYear().substr(-2);
            var v = "O"+n + "{{$echantillons['id'] + 1}}"
            document.getElementById("demo").value  = v;
        }
    }
</script>


@endsection