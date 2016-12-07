<div class="container" style="margin-top: 60px;">
    <div class="row">
    	<div class="col-xs-12 col-sm-3 col-md-4">
    		
    	</div>
        <div class="col-xs-12 col-sm-6 col-md-4">
			<div class="well well-lg">
				<h3>Inicio de sesion</h3>
				<form action="<?php echo APP_URL."/users/login"; ?>" method="POST">
					<div class="form-group">
						<label for="username">Usuario:</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label for="password">Contraseña:</label>
						<input type="password" class="form-control" name="password">
					</div>
					<input type="submit" class="btn btn-raised btn-primary" name="" value="Iniciar sesión">
				</form>
			</div>
        </div>
    	<div class="col-xs-12 col-sm-3 col-md-4">
    		
    	</div>
    </div>
</div>