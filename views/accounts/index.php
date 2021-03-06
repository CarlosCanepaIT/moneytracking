<script>
	function confirmarEliminacion($id)
	{
		eliminar = confirm("¿Deseas eliminar este registro?");
		if (eliminar)
			window.location.href = "<?php echo APP_URL.'/accounts/delete/';?>"+$id;
		else
			alert("Eliminación cancelada");
	}
</script>
<div class="container">
	<div class="row">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4><strong>List of accounts</strong></h4>
			</div>
			<div class="panel-body">
				
				<a class="btn btn-raised btn-success btn-sm" href="<?php echo APP_URL."/accounts/add/"; ?>" role="button">Add</a>
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center">
						<caption>
							<h4>Total of registers: 
								<span class="badge"><?php echo $accountsCount; ?></span>
							</h4>
						</caption>
						<thead>
							<tr>
								<th>ID</th>
								<th>Username</th>
								<th>Name</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
						<?php
						if (!empty($accounts)) {
							foreach ($accounts as $account): 
						?>
						<tr>
							<th scope="row"><?php echo $account["accounts"]["id"]; ?></th>
							<td><?php echo $account["users"]["username"]; ?></td>
							<td><?php echo $account["accounts"]["name"]; ?></td>
							<td>
								<?php echo $this->Html->link("Edit", array(
									"controller"=>"accounts", 
									"method"=>"edit", 
									"arg" => $account["accounts"]["id"]
								)); ?>
								<button class="btn btn-raised btn-danger btn-sm" onclick="confirmarEliminacion(<?php echo $account["accounts"]["id"]; ?>);">
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