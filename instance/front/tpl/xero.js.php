
<script type="text/javascript">
    $(function() {
        $("#example").dataTable(
                {
                    "aoColumnDefs": [
                        {"bSortable": false, "aTargets": [2]}
                    ]});
    })
    var delUrl = '';
    function DeleteXero(url) {
        delUrl = url;
        $("#myModal").modal("show");
    }


</script>

    <script type = "text/javascript" charset = "utf8" src = "<?php print _MEDIA_URL ?>DataTables-1.10.1/js/jquery.js" ></script>

<script type="text/javascript" charset="utf8" src="<?php print _MEDIA_URL ?>DataTables-1.10.1/js/jquery.dataTables.js"></script>
