<?php require("html/header.php") ?>
        <div class="field mt-5">
            <h2 class="text-center">TISI Teachers List</h1>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th  style="width:20%" scope="col">Picture</th>
                <th scope="col">Name</th>
                <th scope="col">Designation</th>
                <th scope="col">Mobile</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $databasename = "tisi_teachers";
              
              //connection
              $conn = mysqli_connect($servername, $username, $password, $databasename) or die("Conection failed");

              $sql = "SELECT * FROM teachers_list";
              $result = mysqli_query($conn, $sql) or die("Query failed");
              $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
              // echo "<pre>";
              // // echo count($row);
              // print_r($row);
              // echo "</pre>";

              //looping
              for($i=0; $i<count($row); $i++) {  
                $name = $row[$i]['full_name'];
                $designation = $row[$i]['designation'];
                $mobail = $row[$i]['mobail'];
                $img = $name.".jpg";
                //including tBody from db
                echo "<tr>
                <th>
                    <img src=\"uploads/". $img . "\" alt=\"\">
                </th>
                <td>
                    <h4>$name</h3>
                </td>
                  <td>$designation</td>
                  <td>$mobail</td>
                </tr>";
              }
            
              mysqli_close($conn);
              ?>
              
            </tbody>
        </table>
        <?php include("html/footer.php") ?>
        <div class="main_page ">
            <a class="text-light" href="admin.php">Admin panel</a>
        </div>
      </div> <!-- .footer end-->
    </div> <!-- .container end-->
</body>
</html>