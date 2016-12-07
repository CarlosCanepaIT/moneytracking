<script>
	function confirmarEliminacion($id)
	{
		eliminar = confirm("¿Deseas eliminar este registro?");
		if (eliminar)
			window.location.href = "<?php echo APP_URL.'/transactions/delete/';?>"+$id;
		else
			alert("Eliminación cancelada");
	}
</script>
<div class="container">
	<div class="row">

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4><strong>List of transactions</strong></h4>
			</div>
			<div class="panel-body">
				<a class="btn btn-raised btn-success btn-sm" href="<?php echo APP_URL."/transactions/add/"; ?>" role="button">Add</a>
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center">
						<caption>
							<h4>Total of registers: 
								<span class="badge"><?php echo $transactionsCount; ?></span>
							</h4> 
							<p>
								<strong>Balance:</strong> $
								<?php 
								echo number_format($transactionsSuma, 2, '.', ',');
								//echo $transactionsSuma;
								?>
							</p>
						</caption>
						<thead>
							<tr>
								<th>ID</th>
								<th>Account</th>
								<th>Category</th>
								<th>Description</th>
								<th>Date</th>
								<th>Amount</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
						<?php
						if (!empty($transactions)) {
							foreach ($transactions as $transaction): 
						?>
						<tr>
							<th scope="row"><?php echo $transaction["transactions"]["id"]; ?></th>
							<td><?php echo $transaction["accounts"]["name"]; ?></td>
							<td><?php echo $transaction["categories"]["name"]; ?></td>
							<td><?php echo $transaction["transactions"]["description"]; ?></td>
							<td>
								<?php
									$date = $transaction["transactions"]["date"];
									$newDate = date('d-m-Y', strtotime($date));
									echo $newDate;
								?>
							</td>
							<td>
								<?php
									$amount = $transaction["transactions"]["amount"];
									if ($amount <= 0) {
										//Egreso
										$newAmount = number_format($amount, 2, '.', ',');
										echo "<span style='color: #f55549; font-weight: bold;'> $ ".$newAmount."</span>";
									} else {
										//Ingreso
										$newAmount = number_format($amount, 2, '.', ',');
										echo "<span style='color: #4caf50; font-weight: bold;'> $ ".$newAmount."</span>";
									}
								?>
							</td>
							<td>
								<?php echo $this->Html->link("Edit", array(
									"controller"=>"transactions", 
									"method"=>"edit", 
									"arg" => $transaction["transactions"]["id"]
								)); ?>
								<button class="btn btn-raised btn-danger btn-sm" onclick="confirmarEliminacion(<?php echo $transaction["transactions"]["id"]; ?>);">
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