<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-body">

                <div class="col-xs-12 col-sm-8 col-md-6">
                    <h4><strong>Edit account</strong></h4>
                    <form action="<?php echo APP_URL."/accounts/edit"; ?>" method="POST">
                    	<input type="hidden" name="id" value="<?php echo $account["id"]; ?>">
                        <div class="form-group">
                            <label for="user_id">Username:</label>
                            <select class="form-control" name="user_id" id="user_id">
                                <?php 
                                foreach ($users as $user):
                                    if ($user["users"]["id"] == $account["user_id"]) {
                                ?>
                                    <option selected value="<?php echo $user["users"]["id"]; ?>">
                                        <?php echo $user["users"]["username"]; ?>
                                    </option>
                                <?php 
                                    } else {
                                ?>
                                    <option value="<?php echo $user["users"]["id"]; ?>">
                                        <?php echo $user["users"]["username"]; ?>
                                    </option>
                                <?php
                                    }
                                    endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $account["name"]; ?>">
                        </div>
                        <input type="submit" class="btn btn-raised btn-success" value="Save">
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>