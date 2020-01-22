<?php
session_start();
$a=$_SESSION['check'];

if(!$a=="yes")
{
    header("location: index.php?error=login_first");
    exit();
}
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

<body class="w3-content" style="max-width:1300px">

    <?php
    require 'admincontent.php';
    ?>

    <div id="aboutc" class="w3-rest w3-blue-grey w3-container " style="height:700px">
        <div class="w3-padding-64 w3-center">
            <div id="pass">


                <center>
                    <form class="w3-card-4 w3-container " method="post">
                        <h2>Enter the details</h2>
                        userid:
                        <input type="text" name="id" placeholder="Enter rollno" value=""> <br><br>name:
                        <input type="text" name="name" placeholder="Enter Name" value=""> <br><br>age:
                        <input type="number" name="age" placeholder="Enter age" value=""> <br><br>
                        <label>DateOfBirth:</label>
                        <input type="text" placeholder="Enter Dob" name="dob" value="">
                        <p class="w3-text-orange">format:DD-MM-YYYY</p>
                        address:
                        <br><textarea name="address"rows="2" cols="25"></textarea> <br><br> mobilenumber:
                        <input type="text" maxlength="10" name="mobile" placeholder="Enter mobile" value=""> <br> <br>
                        DEPT:
                        <select name="degree" required>
                            <option value="SELECT-DEGREE">select-degree</option>

                            <option value="B.E Civil Engineering">B.E Civil Engineering</option>
                            <option value="B.E Mechanical Engineering">B.E Mechanical Engineering</option>
                            <option value="B.E Electronics and Communication Engineering">B.E Electronics and Communication Engineering</option>
                            <option value="B.E Computer Science and Engineering">B.E Computer Science and Engineering</option>
                            <option value="B.Tech Chemical Engineering">B.Tech Chemical Engineering</option>
                            <option value="B.E Electrical and Electronics Engineering">B.E Electrical and Electronics Engineering</option>
                            <option value="B.E Electronics and Instrumentation Engineering">B.E Electronics and Instrumentation Engineering</option>
                            <option value="B.Tech Information Technology">B.Tech Information Technology</option>
                            <option value="B.E Mechatronics Engineering">B.E Mechatronics Engineering</option>
                            <option value="B.Tech Food Technology"> B.Tech Food Technology</option>
                            <option value="B.E Automobile Engineering">B.E Automobile Engineering</option>
                            <option value="Master of Computer Applications (MCA)">Master of Computer Applications (MCA)</option>
                            <option value="Master of Business Administration (MBA)">Master of Business Administration (MBA)</option>
                            <option value="B.Sc Computer Systems and Design">B.Sc Computer Systems and Design</option>
                            <option value="M.Sc Software Systems">M.Sc Software Systems</option>
                            <option value="	B.Sc Information Systems"> B.Sc Information Systems</option>
                        </select>




                        <BR><br>
                        Batch:
                        <select name="batch" required> 
                        <option value="select">Select-batch</option>

                        <option value="2021">2020</option>

                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2031">2031</option>
                            <option value="2032">2032</option>
                            <option value="2033">2033</option>
                            <option value="2034">2034</option>
                            <option value="2035">2035</option>
                            <option value="2036">2036</option>









                        </select>
                        <br><br>
                        <button type="submit" name="createuser" formaction="admin_usercreate_next.php">submit</button>
                        <button type="submit" formaction="busadmin.php">cancel</button>


                    </form>
                </center>
            </div>

        </div>
    </div>
    </div>

    </div>


</body>

</html>