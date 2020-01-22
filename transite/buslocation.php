<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
   #map{
       height:500px;
       width:100%;
   }

</style>
</head>
<body>
    <div id="map">  </div>
    <script>
function initMap()
{
    var location={lat:11.2742,lng:77.6070};
    var map=new google.maps.Map(document.getElementById("map"),{
        zoom:4,
        center: location
    });
    var marker=new google.maps.Marker({
        position: location,
        map:map
    });
}
     </script>
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDKvZX1itMQbGrUG3vaJHS3BsNaPMzs4&callback=initMap"></script>
</body>
</html>