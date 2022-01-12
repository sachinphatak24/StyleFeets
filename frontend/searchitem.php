
    <?php
    $output = "";
        $conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");
        

        if(isset($_POST['search'])) {
            $searchq = $_POST['search'];
            $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
            
            $query = mysqli_query("SELECT * FROM shoes WHERE shoebrand LIKE '%$searchq%'") or die("OOps");
            $count = mysqli_num_rows($query);

            if($count == 0)
            {
                $output="No Search Results";
            }else {
                while($row = mysqli_fetch_array($query)){
                    $sname = $row['shoename'];
                    $sprice = $row['shoeprice'];
                    $output = $sname;
                    print_r("$output");
                }

            }    
            
            
            
        }
            ?>
