<script>
	function confirmarEliminacion($id)
	{
		eliminar = confirm("¿Deseas eliminar este registro?");
		if (eliminar)
			window.location.href = "<?php echo APP_URL.'/users/delete/';?>"+$id;
		else
			alert("Eliminación cancelada");
	}
</script>
<div class="container">
	<div class="row">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4><strong>Users list</strong></h4>
			</div>
			<div class="panel-body">

				<a class="btn btn-raised btn-success btn-sm" href="<?php echo APP_URL."/users/add/"; ?>" role="button">Add</a>
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center">
						<caption>
							<h4>Total of registers: 
								<span class="badge"><?php echo $usersCount; ?></span>
							</h4>
						</caption>
						<thead>
							<tr>
								<th>ID</th>
								<th>Username</th>
								<th>Password</th>
								<th>Type</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
						<?php
						if (!empty($users)) {
							foreach ($users as $user): 
						?>
						<tr>
							<th scope="row"><?php echo $user["users"]["id"]; ?></th>
							<td><?php echo $user["users"]["username"]; ?></td>
							<td><?php echo $user["users"]["password"]; ?></td>
							<td><?php echo $user["types"]["name"]; ?></td>
							<td>
								<?php echo $this->Html->link("Edit", array(
									"controller"=>"users", 
									"method"=>"edit", 
									"arg" => $user["users"]["id"]
								)); ?>
								<button class="btn btn-raised btn-danger btn-sm" onclick="confirmarEliminacion(<?php echo $user["users"]["id"]; ?>);">
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