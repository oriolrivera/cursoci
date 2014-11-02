
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
		   <td><?php echo $dato->id_reletion ?></td>
		   <td><?php echo $dato->id_reletion ?></td>
		   <td><?php echo $dato->date_medicament ?></td>

		   <td><a href="<?php echo base_url(); ?>home/editmedicament/<?php echo $dato->id_medicament ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a></td>
		   <td><a href="" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
		 </tr>
		 <?php } ?>
	</tbody>
</table>