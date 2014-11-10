<div class="">
	<h1>Gestor de medicamentos</h1>
</div>

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

<div class="btn-add">
	<a href="<?php echo base_url(); ?>home/addmedicamente" class="btn btn-primary">Agregar</a>
</div>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>#ID</th>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Fecha</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
	</thead>

	<tbody>
		<?php #for ($i=0; $i < 4; $i++) {  
			foreach ($datos as $dato) {
			
		?>
		<tr>
		   <td><?php echo $dato->id_medicament ?></td>
		   <td><?php echo $dato->name_medicament ?></td>
		   <td><?php echo $dato->name_type_medicament ?></td>
		 		   <td><?php echo $dato->date_medicament ?></td>

		   <td><a href="<?php echo base_url(); ?>home/editmedicament/<?php echo $dato->id_medicament ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a></td>
		   <td><a href="<?php echo base_url(); ?>home/deleteMedicament/<?php echo $dato->id_medicament ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
		 </tr>
		 <?php } ?>
	</tbody>
</table>