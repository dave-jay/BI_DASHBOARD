<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>DataTables-1.10.1/css/jquery.dataTables.css">
    </head>
    <body>
        <div class="col-md-12 col-lg-12 ">

            <div class="panel panel-default ">
                <div class="panel-heading">
                    <div style=""><b>List of Xero Key</b></div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <?php
                    $cr = 1;
                    if (!empty($xero)):
                        ?>
                        <form method="post" action="users" class="form-horizontal" role="form" >
                            <table class="table table-hover" id="example">
                                <thead>
                                    <tr>                                      
                                        <!--<th><input type="checkbox" name="checkAll"  id="checkAll"  />Check All <button type="submit" id="" class="label label-danger checkAllSubmit ">Delete</button></th>-->
                                        <th>#</th>
                                        <th>Xero Key </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="">
                                    <?php foreach ($xero as $each_data): ?>
            <!--                                <tr><td>
                                                    <input type="checkbox" class="delete" name="delete[]" value="<?php print $each_data['id']; ?>"  id="delete[]"/>
            
                                                </td>-->
                                    <td><?php print $cr; ?></td>
                                    <td><?php print $each_data['xero_key']; ?></td>
                                    

                                    <td>
                                        <a href="<?php print _U ?>xero/edit/<?php print $each_data['id']; ?>"><i class="glyphicon glyphicon-edit" title="Edit"></i></a>
                                        <a href="javascript:void(0);" onclick="return DeleteXero('xero/delete/<?php print $each_data['id']; ?>')"><i class="glyphicon glyphicon-trash" title="Delete"></i></a>
                                    </td>
                                    </tr>
                                    <?php $cr++; ?>    
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </form>
                    <?php else: ?>
                        <div>No Xero Available</div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </body>
</html>

