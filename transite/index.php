

<main>
<!DOCTYPE html>
<html lang="en">
<title>TRANSITE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        font-family: "Lato", sans-serif
    }
    
    /* .mySlides {
        display: none
    } */
</style>

<body>
<?php
require "header.php";
?>


    <!-- Page content -->
    <div class="w3-content" style="max-width:2000px;">

        <!-- Automatic Slideshow Images -->
        <div class="mySlides w3-display-container w3-center">
            <img src="bus.jpg" style="width:100%">
            
            <div class="w3-display-bottommiddle w3-container w3-text-black w3-padding-32 w3-hide-small">
                <h3>Bus Pass </h3>
                <h4><p><b>you can apply bus pass through online</b></p></h4>
            </div>
        </div>
        <div class="mySlides w3-display-container w3-center">
            <img src="bike.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                <h3> Bike Parking</h3>
                <h4><p><b>To park a motorcycle inside the campus need permission for parking</b></p></h4>
            </div>
        </div>
        <div class="mySlides w3-display-container w3-center ">
            <img src="com.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-black w3-padding-32 w3-hide-small">
                <h2>Complaints</h2>
                 <h4><p><b>    For any transport kind of complaints please register in the complaint bar</b></p></h4>

            </div>
        </div>

        <!-- The Band Section -->
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
            <h1 class="w3-wide">TRANSITE</h1>

            <p class="w3-justify w3-large "> Usually students/staffs are need to get their bus pass or any application form related to transport, they go to the transport office and get their form and fill the details, then they will get the pass. Now I created a website called “TRANSITE”.
                It is an online transport office site for college students/staffs. It is used to get bus pass or any application forms through online by creating account for each student/staff and they will get the application form, then students/staffs
                can fill the form details and completing the verification, they will get the bus pass or any application form related to the transport through online
            
        </div>


            </div>
        </div>

      
    </div>

    <script>
        // Automatic Slideshow - change image every 4 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 4000);
        }

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
</main>
