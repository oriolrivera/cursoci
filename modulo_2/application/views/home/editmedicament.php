<a href="<?php echo base_url(); ?>" class="btn btn-info pull-right">Atras</a>
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

  <div class="form-group col-xs-12">
  	<div class="col-xs-4">
      <label for="">Nombre</label>
      <input type="text" name="name" class="form-control" value="<?php echo $datos->name_medicament;?>">
    </div>
  </div>

  <div class="form-group col-xs-12">
  	<div class="col-xs-4">
   		 <label for="">Tipo medicamento</label>
    	 <select name="type" id="type" class="form-control">
         <option value="">Seleccione</option>
         
         <?php foreach ($datosTypes as $datot) {
            if ($datot->id_type_medicament==$datos->id_reletion) {
              ?>
                 <option value="<?php echo $datot->id_type_medicament; ?>" selected="selected"><?php echo $datot->name_type_medicament; ?></option>
              <?php
            }else{
              ?>
                <option value="<?php echo $datot->id_type_medicament; ?>"><?php echo $datot->name_type_medicament; ?></option>
              <?php
            }
           ?>
           
           <?php
         } ?>
       </select>
  	</div>
  </div>

   <div class="form-group col-xs-12">
    <label for="">Descricion</label>
    <textarea name="desc" id="" cols="60" rows="10"><?php echo $datos->description_medicament;?></textarea>
  </div>
 

 <div class="form-group col-xs-12">
  <input type="hidden" name="id" value="<?php echo $datos->id_medicament ?>">
  <button type="submit" class="btn btn-primary">Guardar</button>
  </div>

<?php echo form_close();?>