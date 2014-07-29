<div class="col-md-12 col-lg-12 ">

    <div class="panel panel-default ">
        <div class="panel-heading">
            <div style=""><b>Credential Key</b></div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="" method="post">
                <div class="form-group">
                    <label class="col-lg-2 control-label" style="font-weight: normal;" for="values_0">Consumer Key </label>
                    <div class=" col-lg-8">
                        <input id="values_0" class="form-control" type="text" required="" placeholder="" value="<?php print $key['consumer_key']; ?>" name="fields[infusionsoft_app_name]">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" style="font-weight: normal;" for="values_0">Consumer Secret</label>
                    <div class=" col-lg-8">
                        <input id="values_0" class="form-control" type="text" required="" placeholder="" value="<?php print $key['consumer_secret']; ?>" name="fields[infusionsoft_app_name]">

                    </div>
                </div>   <div class="form-group">
                    <label class="col-lg-2 control-label" style="font-weight: normal;" for="values_0">Request Token URL: </label>
                    <div class=" col-lg-8">
                        <input id="values_0" class="form-control" type="text" required="" placeholder="" value="<?php print $key['request_token_url']; ?>" name="fields[infusionsoft_app_name]">

                    </div>
                </div>   <div class="form-group">
                    <label class="col-lg-2 control-label" style="font-weight: normal;" for="values_0"> Authorise URL: </label>
                    <div class=" col-lg-8">
                        <input id="values_0" class="form-control" type="text" required="" placeholder="" value="<?php print $key['authorise_url']; ?>" name="fields[infusionsoft_app_name]">

                    </div>
                </div>   <div class="form-group">
                    <label class="col-lg-2 control-label" style="font-weight: normal;" for="values_0">Access Token URL: </label>
                    <div class=" col-lg-8">
                        <input id="values_0" class="form-control" type="text" required="" placeholder="" value="<?php print $key['access_token_url']; ?>" name="fields[infusionsoft_app_name]">

                    </div>
                </div>   <div class="form-group">
                    <label class="col-lg-2 control-label" style="font-weight: normal;" for="values_0">API Endpoint URL:</label>
                    <div class=" col-lg-8">
                        <input id="values_0" class="form-control" type="text" required="" placeholder="" value="<?php print $key['api_endpoint_url']; ?>" name="fields[infusionsoft_app_name]">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label"> </label>
                    <div class="col-lg-2">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>


        </div>
    </div>

</div>