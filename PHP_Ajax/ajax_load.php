<?php
include "link.php";
include "config.php";
?>

<?php
$sql = "SELECT * FROM student";

$result = mysqli_query($conn, $sql) or die("Query faild");
$output = "";

if (mysqli_num_rows($result) > 0) {
    $output = "<div class='container'>
    <table class='w-100 table table-striped'>
            <tr class='bg-secondary'>
                <th class='border'>id</th>
                <th class='border'>name</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
                <td class='border'>{$row["id"]}</td>
                <td class='border'>{$row["first_name"]} {$row["last_name"]}</td>
                </tr>";
    }

    $output .= "</table>
    </div>
    ";


    mysqli_close($conn);

    echo $output;
} else {
    echo "<h2>No data found</h2>";
}
?>