<?php

$id = $_GET['id'];
$sql = "SELECT id, firstname, lastname FROM MyGuests where id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    header('Location: home.php');
}

?>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bg-light">
    <div class="col-lg-12 text-center">
    <?php
    include("connection.php");

          $sql = "SELECT * FROM property_images";
          $result = mysqli_query($conn,$sql);
          $result = $conn->query($sql);
          if ($result->num_rows)
           {
            while ($row= mysqli_fetch_assoc($result)) {

             /* $row = $result->fetch_assoc();
            } else {
              header('Location: home.php');
                  } */

        
       echo '<h2 class="text-danger bg-dark p-2"><b>Flat In Building</b></h2>
    </div>
    <div class="row ml-3 mr-3">
        <img src="../Images/img23.jpg" alt="Card image" style="width:100%;height:510px">
    </div>
    <div class="col-lg-12 text-center">
        <h2 class="text-danger bg-dark p-2"><b>Interiors</b></h2>
    </div>
    <div class="row ml-1 mr-1">
        <div class="col-lg-4">
            <img src="../Images/bedroom6.jpg" alt="Card image" style="width:100%;height:390px">
        </div>
        <div class="col-lg-4">
            <img src="../Images/dining4.jpg" alt="Card image" style="width:100%;height:390px">

        </div>
        <div class="col-lg-4">
            <img src="../Images/kitchen10.jpg" alt="Card image" style="width:100%;height:390px">
        </div>
    </div>
    <div class="row ml-1 mr-1 mt-3">
        <div class="col-lg-4">
            <img src="../Images/bathroom1.jpg" alt="Card image" style="width:100%;height:390px">
        </div>
        <div class="col-lg-4">
            <img src="../Images/hall6.jpg" alt="Card image" style="width:100%;height:390px">
        </div>
        <div class="col-lg-4">
            <img src="../Images/balcony2.jpg" alt="Card image" style="width:100%;height:390px">
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid mt-3 bg-info">
        <div class="container text-center">
            <h2 class="text-danger"><b>Properties Details</b></h2>
            <div class="row mt-4">
                <div class="col-lg-6 text-center">
                    <p><b class="w3-badge w3-xlarge w3-padding w3-green">Price</b>:<span class="w3-amber p-1" style="font-size:20px">23lac</span></p>
                </div>
                <div class="col-lg-6 text-center">
                    <p><b class="w3-badge w3-xlarge w3-padding w3-green">Flat Area</b>:<span class="w3-amber p-1" style="font-size:20px">2BHK</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center bg-dark p-2">
            <h2 class="text-danger">
                <b>   specifications</b>

            </h2>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-2"></div>
        <div class="col-lg-4 ml-2 shadow-lg p-4 mb-4 bg-white">
            <h3 class="text-success"><b>Balcony</b></h3>
            <p>Anti-Skid Ceramic Tiles/Porcelain Tiles</p>
            <h3 class="text-success"><b>Kitchen</b></h3>
            <p>Porcelain Tiles/Ceramic Tiles</p>
            <h3 class="text-success"><b>Living/Dining</b></h3>
            <p>Vitrified Tiles</p>
            <h3 class="text-success"><b>Electrical</b></h3>
            <p>Copper Wiring in Concealed Conduits with Modular Switches</p>
        </div>
        <div class="col-lg-4 ml-3 shadow-lg p-4 mb-4 bg-white">
            <h3 class="text-success"><b>Bedrooms</b></h3>
            <p>Master Bedroom: Laminated Wooden Flooring</p>
            <p>Other Bedroom: Laminated Wooden Flooring</p>
            <h3 class="text-success"><b>Toilet</b></h3>
            <p>Ceramic Tiles/Porcelain Tiles</p>
            <h3 class="text-success"><b>Doors</b></h3>
            <p>Natural Seasoned Hardware Door</p>
            <p>Main Door: Melamine Wenge Finished European Styke Moulded/Skin Shutter</p>
        </div>
        <div class="col-lg-1"></div>
    </div>';
</body>

</html>