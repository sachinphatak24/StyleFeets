
<?php
session_start();

include 'header.php';
?>
    

<div id="main-content">
    <h2>All Reports</h2>
    <?php
        include 'config.php';
        
        $sql = "SELECT * FROM contact";
        $result = mysqli_query($conn, $sql) or die("Query unsuccesful");

        if(mysqli_num_rows($result)>0){ 
    ?>

<!-- cellpadding="7px" -->
<div style="overflow-x:auto;">
    <table cellpadding="7px" >
        <thead>
        <th>Email</th>
        <th>Name</th>
        <th>Message</th>
        <th>Phone No.</th>
        <!-- <th>Gender</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th> -->
        </thead>
        <tbody>
        <?php 
            while ($row = mysqli_fetch_assoc($result)) { 
        ?>
            <tr>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['name'];?></td>
                <td> <?php echo $row['msg']; ?></td>
                <td> <?php echo $row['phone']; ?></td>
               
            </tr>
            <?php } 
            mysqli_close($conn);   
            
            
            ?>
        </tbody>
    </table>
</div>
        <?php }else{
                echo"<h2>No Records Found</h2>";
            } 
 ?>


</div>
</div>
</body>
</html>
