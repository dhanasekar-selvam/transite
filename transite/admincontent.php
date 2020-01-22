 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


     <title>Document</title>
 </head>
 <body>
 <div class="w3-top">
        <div class="w3-bar w3-black ">
        
           
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        </div>
      </div>
      
        <div class="w3-row w3-padding-64 ">
        <div class="w3-quarter w3-black w3-container w3-center w3-bar w3-hide-small " style="height:700px">
           
            <div class="w3-padding-64 w3-bar">
                <br>
                <a href="addbusadmin.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16 w3-hide-small">AddBus</a>
                <a href="editbus_admin.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16 w3-hide-small">EditBusDetails</a>
                <a href="createuser_admin.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16 w3-hide-small">CreateUser</a>
                <a href="viewuser_admin.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16 w3-hide-small">ViewUser</a>
                <a href="createpass_admin.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16 w3-hide-small">CreateBusPass</a>
                <a href="renewpass_admin.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16 w3-hide-small">RenewBusPass</a>
                <a href="Requestdetails.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16 w3-hide-small">BikeParkingRequests</a>
                <a href="complaintview.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16 w3-hide-small">Complaints</a>

<form action="includes/logout.inc.php"method="post">
                <button type="submit"name="logout_admin"class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">Logout</button>
</form>

            </div>
        </div>
        <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
        <a href="addbusadmin.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">AddBus</a>
        <a href="editbus_admin.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">EditBusDetails</a>
        <a href="createuser_admin.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CreateUser</a>
        <a href="viewuser_admin.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ViewUser</a>
        <a href="createpass_admin.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CreateBusPass</a>
        <a href="renewpass_admin.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">RenewBusPass</a>
        <a href="Requestdetails.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BikeParkingRequests</a>
        <a href="complaintview.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Complaints</a>
        <a href="admin.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Logout</a>


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
 
 
 
 
 