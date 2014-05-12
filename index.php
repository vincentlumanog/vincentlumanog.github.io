<?php
include 'css.html';
include 'connection.php';


$result = mysqli_query($con, "SELECT * FROM $tblname");

?>
<body>
<font size='40' face="verdana"><algn='center'>USERS</align></font>
<table class='table table-striped table-hover'>
    <tr>
        <th>userID</th>
        <th>name</th>
        <th>last_name</th>
        <th>type</th>
        <th>edit</th>
        <th>delete</th>

    </tr>

    <?php
    while ($row = mysqli_fetch_array($result)) {

        echo "<tr id='row_" . $row['userID'] . "'>";
        echo "<td>" . $row['userID'] . "</td>";
        echo "<td><b>" . $row['name'] . "</b></td>";
        echo "<td><b>" . $row['last_name'] . "</b></td>";
        echo "<td><b>" . $row['herotypes'] . "</b></td>";
        echo "<td><a data-id=". $row['userID'] ." href='" . $row['userID'] . " ' class='btn btn-primary edit' >edit</a></td>";
        echo "<td><a data-row='#row_" . $row['userID'] . "' href='" . $row['userID'] . " ' class='btn btn-danger delete'>delete</a></td>";
        echo "<input type='hidden' class='type_". $row['herotypes'] ."' >";
        echo "</tr>";
    }
        echo"</table>";
        echo " <a class='btn btn-success' id='add'>add</a>";

    include "modal.html";
?>


<script>
    $(document).ready(function (){

$('#deletemodal').on('show', function() {
var id = $(this).data('href');

    removeBtn = $(this).find('.danger');


});

    $('.delete').on('click', function(e) {
    e.preventDefault();

    var id = $(this).data('id');
        $('#deletemodal').data('id', id).modal('show');

    });



        $('#editmodal').on('show', function() {
        var id = $(this).data('href');
        })
        $('.edit').on('click', function(e) {
        e.preventDefault();

        var id = $(this).data('id');
        $('#editmodal').data('id', id).modal('show');
        });

                $('#addmodal').on('show', function() {
                var id = $(this).data('href');
                })

                $('#add').on('click', function(e) {
                e.preventDefault();

                var id = $(this).data('id');
                $('#addmodal').data('id', id).modal('show');
                $('input:text').val('');
                $('input:radio').attr('checked',false);

                });


        $('.edit').click(function(e){
        e.preventDefault();
        var rows = $(this).attr('data-row');
        var myid = $(this).attr('href');
        var params = {id:myid};
        $('.all_heroes').prop('checked',false);

        $.post('edit.php',params, function(data) {


        $('#userID').val(data.row.userID);
        $('#name').val(data.row.name);
        $('#lastname').val(data.row.last_name);
        $('#type_'+data.row.herotypes).prop('checked',true);

        });
        });
        $('#btnsave').click(function(e) {
        e.preventDefault();

        $.post("editp.php", $("#info_form").serialize());
        $("#editmodal").modal("hide");
        });

                $("#btnadd").click(function(e) {
                e.preventDefault();

                $.post("insert.php", $("#info_form1").serialize());

                $('#addmodal').modal('hide');



                });



$('.btndeleted').click(function(e) {
e.preventDefault();
var row = $(this).attr('data-row');
var id = $(this).attr('href');

$.post('/delete.php', {id: id}, function () {
    $(row).remove();
});
$('#deletemodal').modal('hide');
});

});


</script>

</body>
</html>