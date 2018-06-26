@extends('layouts.adminLayout.admin_design')
@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/0EBFA39A-F828-7048-BD4A-DB25C2F9A60F/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://ff.kis.v2.scr.kaspersky-labs.com/D4C897E0-2E10-E443-8068-788D52249597/abn/main.css"/><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
	#regiration_form fieldset:not(:first-of-type) {
		display: none;
	}

	</style>
<div class="widget-box">
	<div class="widget-header widget-header-blue widget-header-flat">
		<h4 class="widget-title lighter">FIche d'analyse d'un comprime</h4>

		<div class="widget-toolbar">
			<label>
				<small class="green">
					<b>Validation</b>
				</small>

				<input id="skip-validation" type="checkbox" class="ace ace-switch ace-switch-4" />
				<span class="lbl middle"></span>
			</label>
		</div>
	</div>

	<div class="widget-body">
		<div class="widget-main">
			<div id="fuelux-wizard-container">
				<form class="form-horizontal" role="form" method="post" action="{{ route('echantillons.store')}}" name="add_echan" id="add_echan" novalidate="novalidate"> {{ csrf_field() }}

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Code de l'echantillons </label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1" name="nomProduit" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Type de l'echantillons</label>

						<div class="col-sm-9">
							<select name="type" class="chosen-select form-control" onchange="yesnoCheck(this);" id="form-field-select-3" data-placeholder="Choisir un type">
								<option value="">  </option>
								<option value="medicament">Medicament</option>
								<option value="vaccin">Vaccin</option>
								<option value="autre">Autre</option>
							</select>
						</div>
					</div>

					<div class="form-group"  id="test" style="display: none">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Type du Test</label>

						<div class="col-sm-9">
							<select name="type" class="chosen-select form-control"  onchange="code(this);" id="form-field-select-3" data-placeholder="Choisir un type">
								<option value="">  </option>
								<option value="medicament">UV</option>
								<option value="HPLC">HPLC</option>
								<option value="autre">Titrimetrie</option>
							</select>
						</div>
					</div>

					<div id="HPLC" style="display: none">
						<fieldset>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> DCI:  </label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1" name="DCI" class="col-xs-10 col-sm-5" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> References Essai:  </label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1" name="DCI" class="col-xs-10 col-sm-5" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Dosage :  </label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1" name="DCI" class="col-xs-10 col-sm-5" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Lot :  </label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1" name="DCI" class="col-xs-10 col-sm-5" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Peremption:  </label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1" name="DCI" class="col-xs-10 col-sm-5" />
								</div>
							</div>
						<fieldset>

						<fieldset>
						 <legend>Essai :</legend>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Aspect:  </label>

								<div class="col-sm-9">
									<textarea type="text" id="form-field-1" name="DCI" class="col-xs-10 col-sm-5"></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Normes :  </label>

								<div class="col-sm-9">
									<textarea type="text" id="form-field-1" name="DCI" class="col-xs-10 col-sm-5"></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Observation:  </label>

								<div class="col-sm-9">
									<textarea type="text" id="form-field-1" name="DCI" class="col-xs-10 col-sm-5"></textarea>
								</div>
							</div>
						</fieldset>

						<fieldset>
							<legend>Poids Moyens, Uniformite de masse</legend>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Appareils: </label>

								<div class="col-sm-9">
									<select name="type" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choisir un type">
										<option value="">  </option>
										<option value="">Appareil 1</option>
										<option value="">Appareil 2</option>
										<option value="">Appareil 3</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Qualification:  </label>

								<div class="col-sm-9">
									<div class="radio">
										<label>
											<input name="form-field-radio" type="radio" class="ace" />
											<span class="lbl"> Qualifié</span>
										</label>
									</div>

									<div class="radio">
										<label>
											<input name="form-field-radio" type="radio" class="ace" />
											<span class="lbl"> Non Qualifié</span>
										</label>
									</div>
								</div>
							</div>
									
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Poids Moyen:  </label>

								<div class="col-sm-9">
									<input type="text" id="pm1" name="pm1" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="pm2" name="pm2" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="result" name="pm3" class="col-xs-2 col-sm-2 price" />
									<input type="text"  name="DCI" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
								</div>
								
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
								</div>
								
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
								</div>
								
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>

								<div class="col-sm-9">
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
									<input type="text" id="form-field-1" name="DCI" class="col-xs-2 col-sm-2 price" />
								</div>
								
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Poids Total des comprimes:  </label>

								<div class="col-sm-9">
									<input type="text" id="totalPrice" disabled class="col-xs-10 col-sm-5" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Poids Moyens d'un comprimes:  </label>

								<div class="col-sm-9">
									<input type="text" id="poidsMoyens" disabled class="col-xs-10 col-sm-5" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Coefficient de Variation:  </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-5" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> % d'uniformite de masse:  </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-5" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tolerancence:  </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-5" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ecart Type:  </label>

								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-5" />
								</div>
							</div>
						</fieldset>

						<fieldset>
							<legend>HPLC</legend>
							
							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Equipement:  </label>

								<div class="col-sm-9">
									<select multiple="" class="chosen-select form-control col-xs-10 col-sm-5" id="form-field-select-4" data-placeholder="Choose a State...">
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date Prochaine Qualification:  </label>
								<div class="col-sm-9">
									<input type="text" class="col-xs-10 col-sm-5" disable value=""/>
									<label>Qualifie: 
										<input name="switch-field-1" class="ace ace-switch ace-switch-6" type="checkbox" />
										<span class="lbl"></span>
									</label>
								</div>
							</div>

							
						</fieldset>
					</div>
				</form>


				
			</div>
		</div>
	</div>
</div>
		<script src=" {{ asset('js/chosen.jquery.min.js') }}"></script>
<script type="text/javascript">
//Fonction pour choisir un echantillon a analyser
    function yesnoCheck(that){
		if(that.value == "medicament"){
			alert("Vous allez analyser um medicament");
			document.getElementById("test").style.display = "block";
			document.getElementById("ifNo").style.display = "none";
		} else if(that.value == "vaccin"){
			alert("Another is selected");
			document.getElementById("ifNo").style.display = "block";
			document.getElementById("ifYes").style.display = "none";
		} else {
			document.getElementById("ifYes").style.display = "none";
			document.getElementById("ifNo").style.display = "none";
		}

	}

// Fonction pour afficher le test a faire
	function code(that){
		if(that.value == "HPLC"){
			alert("Vous allez analyser um medicament par HPLC");
			document.getElementById("HPLC").style.display = "block";
			document.getElementById("ifNo").style.display = "none";
		} else if(that.value == "vaccin"){
			alert("Another is selected");
			document.getElementById("ifNo").style.display = "block";
			document.getElementById("ifYes").style.display = "none";
		} else {
			document.getElementById("ifYes").style.display = "none";
			document.getElementById("ifNo").style.display = "none";
		}

	}
   
   $('.price').keyup(function () {
 
    // initialize the sum (total price) to zero
    var sum = 0;
	var pm = 0;
     
    // we use jQuery each() to loop through all the textbox with 'price' class
    // and compute the sum for each loop
    $('.price').each(function() {
        sum += Number($(this).val());
		pm += Number($(this).val()) / 20;
    });
     
    // set the computed value to 'totalPrice' textbox
    $('#totalPrice').val(sum);	
    $('#poidsMoyens').val(pm);
     
});


			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				if(!ace.vars['touch']) {
					$('.chosen-select').chosen({allow_single_deselect:true}); 
					//resize the chosen on window resize
			
					$(window)
					.off('resize.chosen')
					.on('resize.chosen', function() {
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					}).trigger('resize.chosen');
					//resize chosen on sidebar collapse/expand
					$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
						if(event_name != 'sidebar_collapsed') return;
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					});
			
			
					$('#chosen-multiple-style .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
						 else $('#form-field-select-4').removeClass('tag-input-style');
					});
				}
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
			
				autosize($('textarea[class*=autosize]'));
				
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
			
			
				
				//"jQuery UI Slider"
				//range slider tooltip example
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1] + "";
			
						if( !ui.handle.firstChild ) {
							$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
							.prependTo(ui.handle);
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('span.ui-slider-handle').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
				
				$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				
				//$('#id-input-file-3')
				//.ace_file_input('show_file_list', [
					//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
					//{type: 'file', name: 'hello.txt'}
				//]);
			
				
				
			
				//dynamically change allowed formats by changing allowExt && allowMime function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var whitelist_ext, whitelist_mime;
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "ace-icon fa fa-picture-o";
			
						whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
						whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "ace-icon fa fa-cloud-upload";
						
						whitelist_ext = null;//all extensions are acceptable
						whitelist_mime = null;//all mimes are acceptable
					}
					var file_input = $('#id-input-file-3');
					file_input
					.ace_file_input('update_settings',
					{
						'btn_choose': btn_choose,
						'no_icon': no_icon,
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
					})
					file_input.ace_file_input('reset_input');
					
					file_input
					.off('file.error.ace')
					.on('file.error.ace', function(e, info) {
						//console.log(info.file_count);//number of selected files
						//console.log(info.invalid_count);//number of invalid files
						//console.log(info.error_list);//a list of errors in the following format
						
						//info.error_count['ext']
						//info.error_count['mime']
						//info.error_count['size']
						
						//info.error_list['ext']  = [list of file names with invalid extension]
						//info.error_list['mime'] = [list of file names with invalid mimetype]
						//info.error_list['size'] = [list of file names with invalid size]
						
						
						/**
						if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
						*/
						
						
						//if files have been selected (not dropped), you can choose to reset input
						//because browser keeps all selected files anyway and this cannot be changed
						//we can only reset file field to become empty again
						//on any case you still should check files with your server side script
						//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
					});
					
					
					/**
					file_input
					.off('file.preview.ace')
					.on('file.preview.ace', function(e, info) {
						console.log(info.file.width);
						console.log(info.file.height);
						e.preventDefault();//to prevent preview
					});
					*/
				
				});
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.closest('.ace-spinner')
				.on('changed.fu.spinbox', function(){
					//console.log($('#spinner1').val())
				}); 
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up bigger-110', icon_down:'ace-icon fa fa-caret-down bigger-110'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
				$('#spinner4').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus', icon_down:'ace-icon fa fa-minus', btn_up_class:'btn-purple' , btn_down_class:'btn-purple'});
			
				//$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
				//or
				//$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
				//$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0
			
			
				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			
			
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false,
					disableFocus: true,
					icons: {
						up: 'fa fa-chevron-up',
						down: 'fa fa-chevron-down'
					}
				}).on('focus', function() {
					$('#timepicker1').timepicker('showWidget');
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				
			
				
				if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
				 //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
				 icons: {
					time: 'fa fa-clock-o',
					date: 'fa fa-calendar',
					up: 'fa fa-chevron-up',
					down: 'fa fa-chevron-down',
					previous: 'fa fa-chevron-left',
					next: 'fa fa-chevron-right',
					today: 'fa fa-arrows ',
					clear: 'fa fa-trash',
					close: 'fa fa-times'
				 }
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
			
				$('#colorpicker1').colorpicker();
				//$('.colorpicker').last().css('z-index', 2000);//if colorpicker is inside a modal, its z-index should be higher than modal'safe
			
				$('#simple-colorpicker-1').ace_colorpicker();
				//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
				//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
				//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
				//picker.pick('red', true);//insert the color if it doesn't exist
			
			
				$(".knob").knob();
				
				
				var tag_input = $('#form-field-tags');
				try{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
						/**
						//or fetch data from database, fetch those that match "query"
						source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
						*/
					  }
					)
			
					//programmatically add/remove a tag
					var $tag_obj = $('#form-field-tags').data('tag');
					$tag_obj.add('Programmatically Added');
					
					var index = $tag_obj.inValues('some tag');
					$tag_obj.remove(index);
				}
				catch(e) {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//autosize($('#form-field-tags'));
				}
				
				
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					if(!ace.vars['touch']) {
						$(this).find('.chosen-container').each(function(){
							$(this).find('a:first-child').css('width' , '210px');
							$(this).find('.chosen-drop').css('width' , '210px');
							$(this).find('.chosen-search input').css('width' , '200px');
						});
					}
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					autosize.destroy('textarea[class*=autosize]')
					
					$('.limiterBox,.autosizejs').remove();
					$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
				});
			
			});
		</script>

@endsection