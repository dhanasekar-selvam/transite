<!DOCTYPE html>
<html>
<title>TRANSITE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    #pass {
        width: 70%;
        margin-left: auto;
        margin-right: auto;
        margin-top: auto;
        margin-bottom: auto;
        border: 1px solid lightblue;
        padding: auto;
        margin: left;
        margin: auto;
    }
</style>

<body class="w3-content w3-mobile" style="max-width:1400px">



    <div class=" w3-blue-grey w3-container-large " style="height:800px">
        <div class="w3-padding-12 w3-center">
            <h2>Bike Parking Form</h2>
            <div id="pass">
<center>
                    <form class="w3-card-4 w3-container w3-padding-24"method="post">
                        Name:<br><input type="text" name="name" value=""><br> for:
                        <input type="radio" name="radio" value="student">student 
                        <input type="radio" name="radio" value="staff">staff<br> rollno: <br>
                        <input type="text" name="rollno" value=""><br><br> age: <br>
                        <input type="number" name="age" value=""><br><br>address: <br>
                       <textarea name="address"rows="2" cols="20">
                 </textarea>
                        <br><br>mobilenumber: <br>
                        <input type="text" maxlength="10"  name="mobilenum" ><br><br> Emailaddresss/id:<br><input type="email" name="emailid" value=""><br><br> licencenumber:<br>
                        <input type="text" name="licencenumber" ><br><br> enter bike rc no:<br><input type="text" name="brc" value=""><br>
                        <br> <button type="submit" name="bikenext"formaction="bikenext.php" value="next">next</button>
                         <button type="submit" formaction="index.php">cancel</button>

                    </form>
                </center>
            </div>

        </div>
    </div>
    </div>

    </div>


</body>

</html>