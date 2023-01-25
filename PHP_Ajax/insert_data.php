<?php
include "link.php";
?>

<?php
$first_name = 'first_name';
$last_name = 'last_name';
include "config.php";
$sql = "INSERT INTO student($first_name, $last_name) VALUES('first_name','last_name')";
$result = mysqli_query($conn, $sql) or die("Query Faild");
?>

<html>

<body>
    <div class="bg-primary m-0 p-2 text-light text-center">
        <h2>Php with ajax in add data</h2>
    </div>

    <form action="POST">
        <div class="bg-secondary py-3 w-100 text-center">
            <input class="p-1 b-radious" id="fname" type="text" placeholder="Type your first name">
            <input class="p-1 b-radious" id="lname" type="text" placeholder="Type your last name">
            <input class="btn btn-primary" id="save-button" type="button" value="Save">
        </div>
    </form>
    <table class="table table-striped">
        <tr>
            <th class="border">id</th>
            <th class="border">name</th>
        </tr>
        <tr>
            <td class="border">1</td>
            <td class="border"></td>
        </tr>
    </table>

    <script>
        $(document).ready(function() {
            $("#load_button").on("click", function(e) {
                $.ajax({
                    url: "ajax_load.php",
                    type: "POST",
                    success: function(data) {
                        $("#table_data").html(data)
                    }
                })
            })
        })
    </script>
    <script>
        $("#save-button").on("click", function(e) {

            e.preventDefault();
            var fname = $("#fname").val();
            var lname = $("#lname").val();

            $.ajax({
                url: "ajex_insert.php",
                type: "POST",
                data: {
                    first_name: fname,
                    last_name: lname
                },
                success: function(data) {
                    if (data == 1) {
                        loadtable();
                    } else {
                        alert("Can't save data");
                    }
                }
            })
        })
    </script>
</body>

</html>