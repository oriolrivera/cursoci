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
      <input type="text" name="name" class="form-control" value="<?php echo set_value("name");?>">
    </div>
  </div>

  <div class="form-group col-xs-12">
  	<div class="col-xs-4">
   		 <label for="">Tipo medicamento</label>
    	 
       <select name="type" id="type" class="form-control">
         <option value="">Seleccione</option>
         
         <?php foreach ($datos as $dato) {
           ?>
            <option value="<?php echo $dato->id_type_medicament; ?>"><?php echo $dato->name_type_medicament; ?></option>
           <?php
         } ?>
       </select>

  	</div>
  </div>

   <div class="form-group col-xs-12">
    <label for="">Descricion</label>
    <textarea name="desc" id="" cols="60" rows="10"><?php echo set_value("desc");?></textarea>
  </div>
 

 <div class="form-group col-xs-12">

  <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>

<?php echo form_close();?>