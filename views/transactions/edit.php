<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-body">

                <div class="col-xs-12 col-sm-8 col-md-6">
                    <h4><strong>Edit transaction</strong></h4>
                    <form action="<?php echo APP_URL."/transactions/edit"; ?>" method="POST">
                    	<input type="hidden" name="id" value="<?php echo $transaction["id"]; ?>">
                        <div class="form-group">
                            <label for="operation">Operation:</label>
                            <?php if ($transaction["amount"] <= 0) { ?>
                            <select class="form-control" name="operation" id="operation">
                                <option value="egreso">Egreso</option>
                                <option value="ingreso">Ingreso</option>
                            </select>
                            <?php } else { ?>
                            <select class="form-control" name="operation" id="operation">
                                <option value="ingreso">Ingreso</option>
                                <option value="egreso">Egreso</option>
                            </select>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label for="account_id">Account:</label>
                            <select class="form-control" name="account_id" id="account_id">
                                <?php 
                                foreach ($accounts as $account):
                                    if ($account["accounts"]["id"] == $transaction["account_id"]) {
                                ?>
                                    <option selected value="<?php echo $account["accounts"]["id"]; ?>">
                                        <?php echo $account["accounts"]["name"]; ?>
                                    </option>
                                <?php 
                                    } else {
                                ?>
                                    <option value="<?php echo $account["accounts"]["id"]; ?>">
                                        <?php echo $account["accounts"]["name"]; ?>
                                    </option>
                                <?php
                                    }
                                    endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category:</label>
                            <select class="form-control" name="category_id" id="category_id">
                                <?php 
                                foreach ($categories as $category):
                                    if ($category["categories"]["id"] == $transaction["category_id"]) {
                                ?>
                                    <option selected value="<?php echo $category["categories"]["id"]; ?>">
                                        <?php echo $category["categories"]["name"]; ?>
                                    </option>
                                <?php 
                                    } else {
                                ?>
                                    <option value="<?php echo $category["categories"]["id"]; ?>">
                                        <?php echo $category["categories"]["name"]; ?>
                                    </option>
                                <?php
                                    }
                                    endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="3"><?php echo $transaction["description"]; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" id="date" class="form-control" name="date" value="<?php echo $transaction["date"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount:</label>
                            <input type="number" step="any" id="amount" class="form-control" name="amount" value="<?php echo abs($transaction["amount"]); ?>">
                        </div>
                        <input type="submit" class="btn btn-raised btn-success" value="Save">
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>