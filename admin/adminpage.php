
<?php
session_start();
include '../common/connection.php';
if($_SESSION['adminlogin']== ""){
  echo "<script> window.location='adminlogin.php'; </script>";
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Admin</title>
    <style>
body {font-family: Arial;
width: 100%; }

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

@media screen and (max-width: 500px){
  .tab button{
    float: none;
    width: 100%;
  }
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>    
  </head>
  <body>
   

    <!-- Optional JavaScript; choose one of the two! -->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Contact')">Contact Us Query</button>
  <button class="tablinks" onclick="openCity(event, 'Newsletters')">Newsletters</button>
  <button class="tablinks" onclick="openCity(event, 'Services Enquiry')">Services Enquiry</button>
  <button class="tablinks" onclick="openCity(event, 'Events Enquiry')">Events Enquiry</button>
  </div>

<div id="Contact" class="tabcontent">
  <p class="h3 text-center">Contact Us Query</h3>


    <table class="table teble-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col" class="text-center">Id</th>
      <th scope="col" class="text-center">Name</th>
      <th scope="col" class="text-center">Email</th>
      <th scope="col" class="text-center">Subject</th>
      <th scope="col" class="text-center">Message</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     $sql1 = "SELECT * FROM contact order by id desc";
        $query1 = mysqli_query($conn,$sql1);
        while($row = mysqli_fetch_assoc($query1)){


    ?>
    <tr>
      <th class="text-center" scope="row"> <?php echo $row['id']; ?> </th>
      <td class="text-center"><?php echo $row['name']; ?></td>
      <td class="text-center"> <?php echo $row['email']; ?> </td>
      <td class="text-center"><?php echo $row['subject']; ?></td>
      <td class="text-center"><?php echo $row['message']; ?></td>
    </tr>

    <?php } ?>
  </tbody>
</table>



</div>

<div id="Newsletters" class="tabcontent">
  <p class="h3 text-center">Newsletters</h3>
 <table class="table teble-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col" class="text-center">Id</th>
      <th scope="col" class="text-center">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     $sql2 = "SELECT * FROM newsletters order by id desc";
        $query2 = mysqli_query($conn,$sql2);
       
        while($row2 = mysqli_fetch_assoc($query2)){
    ?>
    <tr>
      <th class="text-center" scope="row"> <?php echo $row2['id']; ?> </th>
      <td class="text-center"> <?php echo $row2['email']; ?> </td>
    </tr>

    <?php } ?>
  </tbody>
</table>


  
</div>

<div id="Services Enquiry" class="tabcontent">
  <p class="h3 text-center">Services Enquiry</h3>
 <table class="table teble-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col" class="text-center">Id</th>
      <th scope="col" class="text-center">Name</th>
      <th scope="col" class="text-center">Contact</th>
      <th scope="col" class="text-center">Email</th>
      <th scope="col" class="text-center">Enquiry</th>
      <th scope="col" class="text-center">Subject</th>
      <th scope="col" class="text-center">Message</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    
        $sql3 = "SELECT * FROM enquiry order by id desc";
        $query3 = mysqli_query($conn,$sql3);
       
        while($row3 = mysqli_fetch_assoc($query3)){
    ?>
    <tr>
      <th class="text-center" scope="row"> <?php echo $row3['id']; ?> </th>
      <td class="text-center"><?php echo $row3['name']; ?></td>
      <td class="text-center"><?php echo $row3['contact']; ?></td>
      <td class="text-center"> <?php echo $row3['email']; ?> </td>
       <td class="text-center"><?php echo $row3['enquiry']; ?></td>
      <td class="text-center"><?php echo $row3['subject']; ?></td>
      <td class="text-center"><?php echo $row3['message']; ?></td>
    </tr>

    <?php } ?>
  </tbody>

</table>

  
  
</div>

<div id="Events Enquiry" class="tabcontent">
  <p class="h3 text-center">Events Enquiry</h3>

 <table class="table teble-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col" class="text-center">Id</th>
      <th scope="col" class="text-center">Name</th>
      <th scope="col" class="text-center">Contact</th>
      <th scope="col" class="text-center">Email</th>
      <th scope="col" class="text-center">Enquiry</th>
      <th scope="col" class="text-center">Subject</th>
      <th scope="col" class="text-center">Message</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    
        $sql4 = "SELECT * FROM events_enquiry order by id desc";
        $query4 = mysqli_query($conn,$sql4);
       
        while($row4 = mysqli_fetch_assoc($query4)){
    ?>
    <tr>
      <th class="text-center" scope="row"> <?php echo $row4['id']; ?> </th>
      <td class="text-center"><?php echo $row4['name']; ?></td>
      <td class="text-center"><?php echo $row4['contact']; ?></td>
      <td class="text-center"> <?php echo $row4['email']; ?> </td>
       <td class="text-center"><?php echo $row4['enquiry']; ?></td>
      <td class="text-center"><?php echo $row4['subject']; ?></td>
      <td class="text-center"><?php echo $row4['message']; ?></td>
    </tr>

    <?php } ?>
  </tbody>
  
</div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>