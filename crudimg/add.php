
<?php
session_start();

include 'header.php';

?>

<div id="main-content">


    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post"  enctype="multipart/form-data">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="shoename" required/>
         </div>
        <div class="form-group">
            <label>Brand</label>
            <input type="text" name="shoebrand" required/>
        </div>

        <div class="form-group">
            <label>Type</label>
            <select name="stype" required>
                <option value="" selected disabled>Select Class</option>
                <?php
                 
                 $conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");

                    $sql = "SELECT * FROM shoetype";
                    $result = mysqli_query($conn, $sql) or die("Query unsuccesful");
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>    
                    <option value="<?php echo $row['type_id']; ?>"><?php echo $row['type_name']; ?></option>
                     
                <?php } ?>
                        
            </select>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select name="gtype" required>
                <option value="" selected disabled>Select Class</option>
                <?php
                 
                 $conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");

                    $sql = "SELECT * FROM gendertype";
                    $result = mysqli_query($conn, $sql) or die("Query unsuccesful");
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>    
                    <option value="<?php echo $row['gid']; ?>"><?php echo $row['g_type']; ?></option>
                     
                <?php } ?>
                        
            </select>
        </div>
        
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="shoeprice" required />
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="text" name="shoeqty" required />
        </div>

        <div class="form-group">
            <label for="file">Shoe Image </label>
            <input type="file" name="file" />
        </div>
        <!-- required  -->
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
