<?php
session_start();

include 'header.php'; 

if(isset($_POST['deletebtn'])){
    include 'config.php';
    $shoe_id = $_POST['shoeid'];
    $sql = "DELETE FROM shoes WHERE shoeid = {$shoe_id}";


    $result = mysqli_query($conn, $sql) or die("Query unsuccesful");


    header ("location: http://localhost/fp/crudimg/index.php");

    mysqli_close($conn);



}
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="shoeid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
