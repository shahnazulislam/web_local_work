<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    $conn = mysqli_connect("localhost","root","","crud") or die("Connection faild");
    $sql = "SELECT * FROM students JOIN studentclass WHERE students.sclass = studentclass.cid";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessfull");

    if($rows = mysqli_num_rows($result) > 0){
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        
        <tbody>
            <?php 
            while($rows = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $rows['sid'];?></td>
                <td><?php echo $rows['sname'];?></td>
                <td><?php echo $rows['saddress'];?></td>
                <td><?php echo $rows['cname'];?></td>
                <td><?php echo $rows['sphone'];?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }else{
        echo "<h1>NO Record found</h1>";
    }
    
    mysqli_close($conn);
    ?>

</div>
</div>
</body>
</html>
