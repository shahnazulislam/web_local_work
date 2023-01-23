<?php
include "link.php";

?>

<body>
    <div class="container">
    <table class="w-100 ">
        <tr class="border bg-primary">
            <td>
                <h1 class="text-center text-light">PHP with Ajax</h1>
            </td>
        </tr>
        <tr class="border">
            <td class="col-md-12 text-center bg-danger">
                <input class="mx-auto" type="button" id="load_button" value="load data">
            </td>
        </tr>
        <tr>
            <td id="table_data">
                <table class="table">
                    <tr class="bg-secondary text-light">
                        <th class="border">id</th>
                        <th class="border">name</th>
                    </tr>
                    <tr>
                        <td class="border ">1</td>
                        <td class="border ">Shahnazul islam</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </div>



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
    
</body>

</html>
