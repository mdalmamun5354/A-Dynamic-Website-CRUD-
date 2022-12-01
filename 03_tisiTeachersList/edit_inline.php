<?php
error_reporting(0);


$st_sn = $_GET['id'];
$st_index = $_GET['index'];

//connection
$conn = mysqli_connect("localhost", "root", "", "tisi_teachers") or die("Conection failed");

// get data
$sql = "SELECT * FROM teachers_list";
$result = mysqli_query($conn, $sql) or die("Query failed");
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
// echo "<pre>";
// // echo count($row);
// print_r($row);
// echo "</pre>". $st_sn;

// $name = $row[$st_index]['full_name'];
// $designation = $row[$st_index]['designation'];
// $mobail = $row[$st_index]['mobail'];
// $img = $name.".jpg";
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        .container {
            width: 800px;
            padding: 50px !important;
            padding-top: 1px !important;
            background-color: rgb(199, 255, 198);
        }
    </style>
    </head>
    <body>
        <div class="container mt-4">
            <div class="field mt-5">
                    <h2 class="text-center">Edit The List</h1>
                </div>
            <form class="m-5 mt-0" method="post" action=""  enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Teacher Name</label>
                    <input type="name" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Designation</label>
                    <input type="text" name="designation" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="text" name="mobail" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Picture</label>
                    <input type="file" name="picture" class="form-control">
                </div>
                <a class="p-0" href="edit_warning.php">
                <button type="submit" name="submit" class="btn btn-warning" onclick="window.location.href='w3docs.com';">Set</button>
                </a>
            </form>
            <?php
                $name = $_POST['name'];
                $designation = $_POST['designation'];
                $mobail = $_POST['mobail'];
                $edit_btn = $_POST['submit'];
                

                // sql to update a record
                if(isset($edit_btn)){
                    $sql_1 = "UPDATE teachers_list SET full_name='$name' WHERE sn=$st_sn";
                    $edit_1 = mysqli_query($conn, $sql_1);

                    $sql_2 = "UPDATE teachers_list SET designation='$designation' WHERE sn=$st_sn";
                    $edit_2 = mysqli_query($conn, $sql_2);

                    $sql_3 = "UPDATE teachers_list SET mobail='$mobail' WHERE sn=$st_sn";
                    $edit_3 = mysqli_query($conn, $sql_3);
                    echo "<a href=\"admin.php\">Go Back</a>";
                }
                
                mysqli_close($conn);

                // file uload
                $picName = $_FILES['picture']['name'];
                $picTmpName = $_FILES['picture']['tmp_name'];
                move_uploaded_file($picTmpName, "uploads/".$name.".jpg");

                // // print_r($_GET);
                // echo"<pre>";
                // echo($edit_btn);
                // echo"</pre>";
            ?>
        </div>
    </body>
</html>
