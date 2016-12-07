<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-body">

                <div class="col-xs-12 col-sm-8 col-md-6">
                    <h4><strong>Add account</strong></h4>
                    <form action="<?php echo APP_URL."/accounts/add"; ?>" method="POST">
                        <div class="form-group">
                            <label for="user_id">Username:</label>
                            <select class="form-control" name="user_id" id="user_id">
                            <?php foreach ($users as $user): ?>
                                <option value="<?php echo $user["users"]["id"]; ?>">
                                    <?php echo $user["users"]["username"]; ?>
                                </option>
                            <?php endforeach; ?>
                            </select>
                        </div>
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
