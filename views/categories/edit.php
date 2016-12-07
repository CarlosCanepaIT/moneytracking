<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-body">

                <div class="col-xs-12 col-sm-8 col-md-6">
                    <h4><strong>Edit category</strong></h4>
                    <form action="<?php echo APP_URL."/categories/edit"; ?>" method="POST">
                    	<input type="hidden" name="id" value="<?php echo $category["id"]; ?>">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $category["name"]; ?>">
                        </div>
                        <input type="submit" class="btn btn-raised btn-success" value="Guardar">
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>