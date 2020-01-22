

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
      <!-- First Grid: Logo & About -->
      <div class="w3-top">
        <div class="w3-bar w3-black ">
        
           
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        </div>
      </div>
      
        <div class="w3-row w3-padding-64 ">
        <div class="w3-quarter w3-black w3-container w3-center w3-bar w3-hide-small " style="height:700px">
           
            <div class="w3-padding-64 w3-bar">
                <br><br>
                <a href="aboutme.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16 w3-hide-small">Aboutme</a>
                <a href="editprofile.php" class="w3-button w3-black w3-block w3-hover-teal w3-padding-16 w3-hide-small">EditMyProfile</a>
                <a href="createpass.php" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16 w3-hide-small">CreateBusPass</a>
                <a href="renewpass.php" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16 w3-hide-small">RenewBusPass</a>
                <a href="passdetails.php" class="w3-button w3-black w3-block w3-hover-dark-grey w3-padding-16 w3-hide-small">BusPassDetails</a>
                <a href="busdetails.php" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16 w3-hide-small">BusDetails</a>
                <a href="includes/logout.inc.php" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16 w3-hide-small">Logout</a>

        

            </div>
        </div>
        
        <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
        <a href="aboutme.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Aboutme</a>
        <a href="editprofile.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">EditMyProfile</a>
        <a href="createpass.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CreateBusPass</a>
        <a href="renewpass.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">RenewBusPass</a>
        <a href="passdetails.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BusPassDetails</a>
        <a href="busdetails.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BusDetails</a>
        <a href="includes/logout.inc.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Logout</a>
        </div>
    
        <script>
        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('ticketModal');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>



</body>
</html>