<?php
session_start();

include 'header.php'; ?>
<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="shoeid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>


    <?php
        if(isset($_POST['showbtn'])){
            $conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");
            $shoe_id = $_POST['shoeid'];

            $sql = "SELECT * FROM shoes WHERE shoeid = {$shoe_id}";
            $result = mysqli_query($conn, $sql) or die("Query unsuccesful");
            
            
            if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="shoeid"  value="<?php echo $row['shoeid']; ?>" />
            <input type="text" name="shoename" value="<?php echo $row['shoename']; ?>" />
        </div>
        <div class="form-group">
            <label>Brand</label>
            <input type="text" name="shoebrand" value="<?php echo $row['shoebrand']; ?>" />
        </div>
        <div class="form-group">
        <label>Type</label>
        <?php 
            $sql1 = "SELECT * FROM shoetype";
            $result1 = mysqli_query($conn,$sql1) or die("Query Unsuccessful");         
          
            if (mysqli_num_rows($result1) > 0) {
                echo '<select name= "stype">'; 
                while($row1 = mysqli_fetch_assoc($result1)){
                    if($row['stype'] == $row1['type_id']){
                        $select = "selected";
                    } else{
                        $select = "";
                     }    
                    echo "<option {$select} value='{$row1['type_id']}'>{$row1['type_name']}</option>";
                }
                echo "</select>";
            }
          ?>
        </div>

        <div class="form-group">
        <label>Gender</label>
        <?php 
            $sql1 = "SELECT * FROM gendertype";
            $result1 = mysqli_query($conn,$sql1) or die("Query Unsuccessful");         
          
            if (mysqli_num_rows($result1) > 0) {
                echo '<select name= "gtype">'; 
                while($row1 = mysqli_fetch_assoc($result1)){
                    if($row['gtype'] == $row1['gid']){
                        $select = "selected";
                    } else{
                        $select = "";
                     }    
                    echo "<option {$select} value='{$row1['gid']}'>{$row1['g_type']}</option>";
                }
                echo "</select>";
            }
          ?>
        </div>
        
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="shoeprice" value="<?php echo $row['shoeprice']; ?>" />
        </div>
        
        <div class="form-group">
            <label>Quantity</label>
            <input type="text" name="shoeqty" value="<?php echo $row['shoeqty']; ?>" />
        </div>

        <!-- <div class="form-group">
            <label>Image</label>
            <img src=" <?php echo $row['shoeimg']; ?>" height="80px" width="80px" alt="">
            <input type="file" name="shoeqty" value="<?php echo $row['shoeimg']; ?>" />
        </div> -->

    <input class="submit" type="submit" value="Update"  />
    </form>

    <?php 
    }
}
}
?>
</div>
</div>
</body>
</html>
