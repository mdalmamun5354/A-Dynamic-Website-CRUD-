<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        .alert {
            width:400px;
            height: 70px;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
            text-align: center;
        }
        a {
            text-decoration: none;
            color: black;
        }
    </style>
    </head>
    <body>
        <?php
            $st_sn = $_GET['id'];

            //connection
            $conn = mysqli_connect("localhost", "root", "", "tisi_teachers") or die("Conection failed");


            // sql to delete a record
            $sql = "DELETE FROM teachers_list WHERE sn=$st_sn";

            //run query
            $delete = mysqli_query($conn, $sql);

            if($delete){
                echo "
                <div class=\"alert alert-danger mt-3\" role=\"alert\">
                    Record deleted successfully!
                    <br>
                    <a href=\"admin.php\">Ok</a>
                </div>
                ";
            } else{
                echo "Error deleting record: " . mysqli_error($conn);
            }
            
            mysqli_close($conn);
            // print_r($_GET);
        ?>
    </body>
</html>
