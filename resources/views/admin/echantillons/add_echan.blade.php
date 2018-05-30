@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Echantillons</a> <a href="#" class="current">Réception</a></div>
		<h1>Echantillons</h1>
	</div>
	<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Georgia, serif; color: #17b762}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #17b762 !important;} .bootstrap-iso .btn-custom{background: #17b762} .bootstrap-iso .btn-custom:hover{background: #03a34e;}.bootstrap-iso .outline, .bootstrap-iso .outline:focus{background-color: transparent; border: 2px solid #17b762} .bootstrap-iso .outline:hover{background-color: transparent; border: 2px solid#3fdf8a; color: #3fdf8a !important}.bootstrap-iso .form-control:focus { border-color: #17b762; -webkit-box-shadow: none; box-shadow: none;} .bootstrap-iso .has-error .form-control:focus{-webkit-box-shadow: none; box-shadow: none;} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#17b762; background-color: #ffffff; border-radius: 4px; padding-left:12px}</style>

	<div class="container-fluid"><hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
						<h5>Saisir les informations de l'echantillon</h5>
					</div>
					<br>
					<br>
					<div class="widget-content nopadding">
						<div class="bootstrap-iso">
							<div class="container-fluid">
								<div class="row">
										<form class="form-horizontal" method="post" action="{{ url('/admin/add-echantillon')}}" name="add_echan" id="add_echan" novalidate="novalidate"> {{ csrf_field() }}
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="date" >
													Date reçu
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control" id="date" name="dateRecu"  type="date"/>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="select1">
													Nom client
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
									                <input class="form-control" type="text" placeholder="Type here for auto complete…" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Ahmedabad&quot;,&quot;India&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" class="span11">
									              </div>
									              <button type="button" class="btn" style="background-color: #fff; color: #17b762" data-toggle="modal" data-target="#addclient">Ajouter client </button>

											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="nomProduit">
													Nom
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control" id="nomProduit" name="nomProduit" placeholder="Nom du produit" type="text"/>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="formeGalenique">
													Forme galenique
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<textarea class="form-control" cols="40" id="formeGalenique" name="formeGalenique" rows="4"></textarea>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="quantiteRecu">
													Quantit&eacute; re&ccedil;u
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control" id="quantiteRecu" name="quantiteRecu" placeholder="Quantit&eacute; re&ccedil;u" type="text"/>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="quantiteLivree">
													Quantit&eacute; livr&eacute;e
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control" id="quantiteLivree" name="quantiteLivree" placeholder="Quantit&eacute; livr&eacute;e" type="text"/>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="fournisseur">
													Nom fournisseur
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control" id="fournisseur" name="fournisseur" placeholder="Nom fournisseur" type="text"/>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="dateFab">
													Date fabrication
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control form-control" id="dateFab" name="dateFab" placeholder="MM/DD/YYYY" type="date"/>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2" for="dateExp">
													Date p&eacute;remption
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control" id="dateExp" name="dateExp" placeholder="MM/DD/YYYY" type="date"/>
												</div>
											</div>
											<div class="form-group">
												<div class="col-sm-4 col-sm-offset-2">
													<button class="btn btn-custom btn-lg btn-block outline" name="Validate" type="Validate">
														Enregistrer
													</button>
												</div>
											</div>
										</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
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

@endsection