<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-body">

                <div class="col-xs-12 col-sm-8 col-md-6">
                    <h4><strong>Add category</strong></h4>
                    <form action="<?php echo APP_URL."/categories/add"; ?>" method="POST">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" class="form-control" name="name">
                        </div>
                        <input type="submit" class="btn btn-raised btn-success" value="Save">
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>
