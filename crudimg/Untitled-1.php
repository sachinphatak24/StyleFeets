
<div style="overflow-x:auto;">
    <table cellpadding="7px" >
        <thead>
        <th>Id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone No.</th>
        <th>Gender</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        </thead>
        <tbody>
        <?php 
            while ($row = mysqli_fetch_assoc($result)) { 
        ?>
            <tr>
                <td> <?php echo $row['casid'];?></td>
                <td> <?php echo $row['username']; ?></td>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['pnumber']; ?></td>
                <td> <?php echo $row['gender']; ?></td>
                <td> <?php echo $row['fname']; ?></td>
                <td> <?php echo $row['lname']; ?></td>
                <td> <?php echo $row['address']; ?></td>
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
