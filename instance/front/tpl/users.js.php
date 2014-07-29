


<script type="text/javascript">
        $(function() {
            $("#example").dataTable(
                    {
                        "aoColumnDefs": [
                            {"bSortable": false, "aTargets": [11]}
                        ]});
        })
    var delUrl = '';
    function DeleteUser(url) {
        delUrl = url;
        $("#myModal").modal("show");
    }



  

    $(document).ready(function() {
        $('#checkAll').click(function(event) {  //on click
            if (this.checked) { // check select status
                $('.delete').each(function() { //loop through each checkbox
                    this.checked = true;  //select all checkboxes with class "checkbox1"              
                });
            } else {
                $('.delete').each(function() { //loop through each checkbox
                    this.checked = false; //deselect all checkboxes with class "checkbox1"                      
                });
            }
        });

        $('.checkAllSubmit').click(function(event) {

            $("#deleteModal").modal("show");




        });
    });
    
</script>



    
    <script type="text/javascript" charset="utf8" src="<?php print _MEDIA_URL ?>DataTables-1.10.1/js/jquery.js"></script>
  
<script type="text/javascript" charset="utf8" src="<?php print _MEDIA_URL ?>DataTables-1.10.1/js/jquery.dataTables.js"></script>
