<?php 


session_start();

if (isset($_SESSION['username'])){
    $_SESSION['msg'] = "You must log in to view this page";
    header("locaton: ./user/login.php");
}

if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: ./user/login.php");
}


?>



<?php
include 'header.php';
?>


<?php
if (isset($_SESSION["success"])): ?> 
    <div>
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);            
            ?>
        </h3>
    </div>
<?php endif ?>


<!-- If the user logs in print info abt him  -->
<?php if (isset($_SESSION['username'])): ?>
    <?php $user = $_SESSION['username'] ?>
    <h3>Welcome <strong><?php echo ucfirst($user); ?>, </strong></h3>
    


<div id="main-content">
    <h2>All Records</h2>
    <?php
        include 'config.php';
        
        $sql = "SELECT * FROM shoes INNER JOIN gendertype ON shoes.gtype = gendertype.gid INNER JOIN shoetype ON shoes.stype = shoetype.type_id ORDER BY shoeid";
        $result = mysqli_query($conn, $sql) or die("Query unsuccesful");

        if(mysqli_num_rows($result)>0){ 
    ?>

<!-- cellpadding="7px" -->
<div style="overflow-x:auto;">
    <table cellpadding="7px" >
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Brand</th>
        <th>Type</th>
        <th>Gender</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php 
            while ($row = mysqli_fetch_assoc($result)) { 
        ?>
            <tr>
                <td> <?php echo $row['shoeid'];?></td>
                <td> <?php echo $row['shoename']; ?></td>
                <td> <?php echo $row['shoebrand']; ?></td>
                <td> <?php echo $row['type_name']; ?></td>
                <td> <?php echo $row['g_type']; ?></td>
                <td> ₹  <?php echo $row['shoeprice']; ?></td>
                <td> <?php echo $row['shoeqty']; ?></td>
                <td> <img src=" <?php echo $row['shoeimg']; ?>" height="80px" width="80px" alt=""></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['shoeid'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['shoeid'];?>'>Delete</a>
                </td>
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


<?php endif ?>

<h3>You have to be an admin in to view this page.</h3>
<a href="./user/login.php">Login</a>
</div>
</div>
</body>
</html>
