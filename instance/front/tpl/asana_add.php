<div class="addAffiliates actionItem">
    <div class="panel panel-default">
        <div class="panel-heading">Add New Asana</div>
        <div class="panel-body">
            <form method="post" action="" class="form-horizontal" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputUser" class="col-lg-2 control-label">Asana Key</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fields[asana_key]" id="asana_key" value="<?php print $asana_key; ?>" placeholder="Asana Key" required>
                    </div>
                </div>
               
                <div class="form-group"> 
                    <div class="col-lg-offset-2 col-lg-10">
                        <input type="hidden" name="fields[asana_id]" id="asana_id" value="<?php print $id_val; ?>">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>