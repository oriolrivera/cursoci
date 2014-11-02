
<form role="form">


  <div class="form-group col-xs-12">
  	<div class="col-xs-4">
      <label for="">Nombre</label>
      <input type="text" name="name" class="form-control" value="<?php echo $datos->name_medicament;?>">
    </div>
  </div>

  <div class="form-group col-xs-12">
  	<div class="col-xs-4">
   		 <label for="">Tipo</label>
    	<input type="text" class="form-control" id="">
  	</div>
  </div>

   <div class="form-group col-xs-12">
    <label for="">Descricion</label>
    <textarea name="desc" id="" cols="60" rows="10"><?php echo $datos->description_medicament;?></textarea>
  </div>
 

 <div class="form-group col-xs-12">
  <button type="submit" class="btn btn-default">Guardar</button>
  </div>
</form>