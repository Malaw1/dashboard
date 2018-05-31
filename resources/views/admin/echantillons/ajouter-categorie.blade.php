@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Echantillons</a> <a href="#" class="current">Ajouter catégorie</a></div>
		<h1>Echantillons</h1>
	</div>
	<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Georgia, serif; color: #17b762}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #17b762 !important;} .bootstrap-iso .btn-custom{background: #17b762} .bootstrap-iso .btn-custom:hover{background: #03a34e;}.bootstrap-iso .outline, .bootstrap-iso .outline:focus{background-color: transparent; border: 2px solid #17b762} .bootstrap-iso .outline:hover{background-color: transparent; border: 2px solid#3fdf8a; color: #3fdf8a !important}.bootstrap-iso .form-control:focus { border-color: #17b762; -webkit-box-shadow: none; box-shadow: none;} .bootstrap-iso .has-error .form-control:focus{-webkit-box-shadow: none; box-shadow: none;} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#17b762; background-color: #ffffff; border-radius: 4px; padding-left:12px}</style>

	<div class="container-fluid"><hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
						<h5>Saisir les informations du nouveau catégorie</h5>
					</div>
					<br>
					<br>
					<div class="widget-content nopadding">
						<div class="bootstrap-iso">
							<div class="container-fluid">
								<div class="row">
										<form class="form-horizontal" method="post" action="{{ url('/admin/ajouter-categorie')}}" name="ajouter-categorie" id="add_echan" novalidate="novalidate"> 
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="nomCat">
													Nom Catégorie
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<input class="form-control" id="nomCat" name="nomCat" placeholder="Nom du catégorie" type="text"/>
												</div>
											</div>
											<div class="form-group ">
												<label class="control-label col-sm-2 requiredField" for="description">
													Description
													<span class="asteriskField">
														*
													</span>
												</label>
												<div class="col-sm-4">
													<textarea class="form-control" cols="40" id="description" name="description" rows="4"></textarea>
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
@endsection