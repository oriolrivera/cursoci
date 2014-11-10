<a href="<?php echo base_url(); ?>home/gestortypemedicamet" class="btn btn-info pull-right">Atras</a>

<h3>Editar tipo medicamento</h3>

<?php
$validation_error=validation_errors("<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>","</div>");
if($validation_error != "")
{
	echo $validation_error;
}
?>

<?php
if($this->session->flashdata("mensaje") != '')
{
	?>
		<p class='alert alert-success' role='alert'>
		<button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
			<?php echo $this->session->flashdata("mensaje")?>
		</p>
	<?php
}
?>

<?php echo form_open(null,array("name"=>"form","id"=>"form"));?>

	 <div class="form-group">
	    <div class="col-sm-7">
    	    <label for="exampleInputPassword1">Nombre</label>    	
			<input type="text" name="type_medicament" class="form-control" value="<?php echo $datos->name_type_medicament;?>">
		</div>
	</div>

	 <div class="form-group">
 		<div class="col-sm-7">
    		<label for="exampleInputPassword1">Descripción</label>
			<textarea name="desc_type_medicament" class="form-control" id="" rows="10"><?php echo $datos->description_type_medicament;?></textarea>
		</div>
	</div>

	<div class="form-group">
 		<div class="col-sm-7  btn-add">
 		<input type="hidden" name="id" value="<?php echo $datos->id_type_medicament ?>">
		<input type="submit"  class="btn btn-primary" value="Guardar">
		</div>
	</div>

<?php echo form_close();?>