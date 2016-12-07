<script>
	function confirmarEliminacion($id)
	{
		eliminar = confirm("¿Deseas eliminar este registro?");
		if (eliminar)
			window.location.href = "<?php echo APP_URL.'/categories/delete/';?>"+$id;
		else
			alert("Eliminación cancelada");
	}
</script>
<div class="container">
	<div class="row">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4><strong>Categories list</strong></h4>
			</div>
			<div class="panel-body">
				<a class="btn btn-raised btn-success btn-sm" href="<?php echo APP_URL."/categories/add/"; ?>" role="button">Add</a>
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center">
						<caption>
							<h4>Total of registers: 
								<span class="badge"><?php echo $categoriesCount; ?></span>
							</h4>
						</caption>
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
						<?php
						if (!empty($categories)) {
							foreach ($categories as $type): 
						?>
						<tr>
							<th scope="row"><?php echo $type["categories"]["id"]; ?></th>
							<td><?php echo $type["categories"]["name"]; ?></td>
							<td>
								<?php echo $this->Html->link("Edit", array(
									"controller"=>"categories", 
									"method"=>"edit", 
									"arg" => $type["categories"]["id"]
								)); ?>
								<button class="btn btn-raised btn-danger btn-sm" onclick="confirmarEliminacion(<?php echo $type["categories"]["id"]; ?>);">
									Delete
								</button>
							</td>
						</tr>
						<?php 
							endforeach;
						}
						?>
						</tbody>
					</table>
				</div>

			</div>
		</div>

	</div>
</div>