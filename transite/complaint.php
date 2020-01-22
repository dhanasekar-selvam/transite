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
        border: 1px solid lightblue;
        padding: auto;
        margin: left;
        margin: auto;
    }
</style> 

<body class="w3-content" style="max-width:1400px">



    <div class=" w3-blue-grey w3-container " style="height:800px">
        <div class="w3-padding-64 w3-center">
            <h2>Complaint </h2>
            <div id="pass">


                <center><br><br>
                    <form class=" w3-container "method="post"> 
                        enter your name:<input type="text" name="name" value=""><br> enter your rollno:<input type="text" name="rollno" value=""><br>
                        <p>Type your complaint here</p>

                        <textarea  name="complaint"rows="10" cols="30"> 
                                    
                                </textarea><br><br><br>
                        <button type="submit" formaction="complaint_finished.php">submit</button>
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