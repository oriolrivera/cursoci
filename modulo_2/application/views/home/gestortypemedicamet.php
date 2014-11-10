<div class="">
	<h1>Gestor tipo de medicamentos</h1>
</div>

<div class="btn-add">
	<a href="<?php echo base_url(); ?>home/addtypemedicamente" class="btn btn-primary">Agregar tipo medicamento</a>
</div>

<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>#ID</th>
			<th>Nombre</th>
			<th>Fecha</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
	</thead>

	<tbody>
		<?php  
			foreach ($datos as $dato) {
			
		?>
		<tr>
		   <td><?php echo $dato->id_type_medicament ?></td>
		   <td><?php echo $dato->name_type_medicament ?></td>
		   <td><?php echo $dato->date_type_medicament ?></td>

		   <td><a href="<?php echo base_url(); ?>home/editypemedicament/<?php echo $dato->id_type_medicament ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a></td>
		   <td><a href="" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
		 </tr>
		 <?php } ?>
	</tbody>
</table>