<?php
include_once 'includes/dbh.inc.php';
session_start();
$sql = "SELECT *FROM  complaint;";
$res = mysqli_query($conn, $sql);
// if (mysqli_num_rows($res)) {
//     while ($row = mysqli_fetch_assoc($res)) {
//         $roll = $row['rollno'];
//         $name = $row['name'];
//         $com = $row['complaint'];
//     }
// }
?>




<!DOCTYPE html>
<html>
<title>TRANSITE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    #pass {
        width: auto;
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        margin-bottom: auto;
        border: 1px ;
        padding: auto;
        margin: left;
        margin: auto;
    }
</style>

<body class="w3-content" style="max-width:1400px">

    <div class=" w3-blue-grey w3-container " style="height:800px">
        <div class="w3-padding-64 w3-center">
            <h2>Complaint Details </h2>
            <div id="pass">


                <center><br><br>
                    <form class=" w3-container " method="post">
                    <?php  
                    echo "<table border='1'>
                            <tr>
                                  <th>Rollno</th>
                                  <th>Name</th>
                                  <th>Complaint</th>
                            </tr>";

                            while($row = mysqli_fetch_array($res))
                            {
                            echo "<tr>";
                            echo "<td>" . $row['rollno'] . "</td>";

                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['complaint'] . "</td>";

                                echo "</tr>";
                            }
                            echo "</table>";
                        ?>
                    <button onclick="window.print()">Print this page</button>

                        <button type="submit" formaction="busadmin.php">Home</button>
                    </form>

                </center>
            </div>

        </div>
    </div>
    </div>

    </div>


</body>

</html>