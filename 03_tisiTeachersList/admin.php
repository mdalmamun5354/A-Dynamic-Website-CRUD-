<?php
error_reporting(0);
require("html/header.php")
?>
        <div class="field mt-5">
            <h2 class="text-center">Add To TISI Teachers List</h1>
        </div>
    <form class="m-5 mt-0" method="post" action=""  enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Teacher Name</label>
            <input type="name" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Designation</label>
            <input type="text" name="desuganation" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Mobile</label>
            <input type="text" name="mobail" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Picture</label>
            <input type="file" name="picture" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </form>

    <hr>
    
    <h2 class="text-center">Modify The List</h1>
    <table class="table">
        <thead>
            <tr>
            <th  style="width:20%" scope="col">Picture</th>
            <th scope="col">Name</th>
            <th scope="col">Designation</th>
            <th scope="col">Mobile</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $connMd = mysqli_connect("localhost", "root", "", "tisi_teachers") or die("Conection failed");

            //select data
            $sqlMd = "SELECT * FROM teachers_list";
            $resultMd = mysqli_query($connMd, $sqlMd) or die("Query failed");
            $row = mysqli_fetch_all($resultMd, MYSQLI_ASSOC); //returns 2d data array

            //looping
            for($i=0; $i<count($row); $i++) {  //count($row) == rows lenght
            $nameMd = $row[$i]['full_name'];
            $designationMd = $row[$i]['designation'];
            $mobailMd = $row[$i]['mobail'];
            $img = $nameMd.".jpg";
            $sn = $row[$i]['sn'];
            $delete_url = "delete_inline.php?id=". $sn;
            $edit_url = "edit_inline.php?id=". $sn . "&index=". $i;
            //including tBody from db
            echo "
            <tr>
                <th>
                    <img src=\"uploads/". $img . "\" alt=\"\">
                </th>
                <td>
                    <h4>$nameMd</h3>
                </td>
                <td>$designationMd</td>
                <td>$mobailMd</td>
                <td>
                <button type=\"button\" class=\"btn btn-warning\">
                <a href='$edit_url'>Edit</a>
                </button>
                <button type=\"button\" class=\"btn btn-danger\">
                <a href='$delete_url'>Delete</a>
                </button>
                </td>
            </tr>";
            }
        
            mysqli_close($connMd);
            ?>
            
        </tbody>         
    </table>
    
        <?php include("html/footer.php") ?>
        <div class="main_page">
            <a class="text-light" href="index.php">Back</a>
        </div>
    </div> <!-- .footer end-->

    <?php
    $name = $_POST['name'];
    $desuganation = $_POST['desuganation'];
    $mobail = $_POST['mobail'];
    $submit = $_POST['submit'];

    $picName = $_FILES['picture']['name'];
    $picTmpName = $_FILES['picture']['tmp_name'];
    
    if(isset($submit)){        
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "tisi_teachers";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $databasename)/* or die("Conection faild")*/;
    // Check connection
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    //   }
    // echo "Connected successfully";

    //insert data
    $sql = "INSERT INTO teachers_list (full_name, designation, mobail) VALUES('$name', '$desuganation', '$mobail')"/* or die("Insert faild")*/;
    $reselt = mysqli_query($conn, $sql);
    //check
    // if($reselt) {
    //     echo "New record created successfully";
    // } else {
    //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }
    
    mysqli_close($conn);

    // file uload
    if($name == "") {
        move_uploaded_file($picTmpName, "uploads/".$picName);
    } else {
        move_uploaded_file($picTmpName, "uploads/".$name.".jpg");
    }
    
    // echo "<pre>";
    // echo $picTmpName . "<br>" . $target_file;
    // print_r($_FILES);
    // echo "</pre>";
    }
    
    ?>
    
    
</div> <!-- .container ends -->
</body>
</html>