@extends('layouts.adminLayout.admin_design')
@section('content')

<div class="page-header">
    <h1>
        Reception
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Nouvel Enregistrement
        </small>
    </h1>
</div><!-- /.page-header -->

<div class="row">

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Choisir Item  </label>

		<div class="col-sm-9">
			<select onchange="yesnoCheck(this);" id="form-field-1"  class="col-xs-10 col-sm-5">
				<option>Item</option>
				<option value="echantiilons">Echantillons</option>
				<option value="reactifs">Reactifs</option>
				<option value="equipement">Equipements</option>
				<option value="conso">Consommables</option>
				<option value="autres">Autres</option>
			</select>
		</div>
	</div>

	<hr />

	<div id="ifYes" style="display: none">
		<div class="col-xs-12" id="echan">
		<!-- PAGE CONTENT BEGINS -->
			<form class="form-horizontal" role="form" method="post" action="{{ route('echantillons.store')}}" name="add_echan" id="add_echan" novalidate="novalidate"> {{ csrf_field() }}

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nom du Produit </label>

				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="nomProduit" class="col-xs-10 col-sm-5" />
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
					<select name="type" class="chosen-select form-control" onchange="code(this);" id="form-field-select-3" data-placeholder="Choisir un type">
						<option value="">  </option>
						<option value="medicament">Medicament</option>
						<option value="vaccin">Vaccin</option>
						<option value="autre">Autre</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Quantite </label>

				<div class="col-sm-9">
					<input type="text" id="form-field-1" name="quantiteRecu" class="col-xs-10 col-sm-5" />
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
	</div>
	
	<div id="ifNo" style="display: none">
		<b> hello world and me another</b>
	</div>


<div>

<script>
	function yesnoCheck(that){
		if(that.value == "echantiilons"){
			alert("Reception d'un echantillon");
			document.getElementById("ifYes").style.display = "block";
			document.getElementById("ifNo").style.display = "none";
		} else if(that.value == "another"){
			alert("Another is selected");
			document.getElementById("ifNo").style.display = "block";
			document.getElementById("ifYes").style.display = "none";
		} else {
			document.getElementById("ifYes").style.display = "none";
			document.getElementById("ifNo").style.display = "none";
		}

	}

	
</script>

{{-- <script type="text/javascript">
	function testFunction(){
		var x = document.getElementById("test");
		if(x.style.display === "none"){
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}

		{{-- function showMe(e){
			var strdisplay = e.options[e.selectedIndex].value;
			var e = document.getElementById("idShowMe");
			if(strdisplay == "Hide"){
				e.style.display = "none";
			} else {
				e.style.display = "block";
			}

		} --}}
	}

	
</script> 

@endsection

