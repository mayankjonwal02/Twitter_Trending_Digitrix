<?php
include 'function.php';



if (isset($_REQUEST['term']) && $_REQUEST['term'] !== "")
{
  
   echo '<div class="row m-3">';


$term = $_REQUEST['term'];



$sql = "SELECT * FROM datalist WHERE city LIKE '%$term%' or country LIKE '%$term%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    $id = $row["id"];
$post_name = $row["title"];
$post_description = $row["description"];
$slug = $row["slug"];
$country = cleanwords($row["country"]);
$country2 = $row["country"];
$city = cleanwords($row["city"]);
$lastupdate = $row["lastupdate"];

 if ($id == 1) {
    continue;
  }



if($city){
 $u_title = "$city <span class='text-muted'>( $country )</span>";
 
}
 
else{
 $u_title = "$country";
   
}


echo'<div class="col-sm-3"><a class="text-decoration-none" href="https://'.$host.''.$slug .'"><div class="text-nowrap m-1 bg-white p-2 rounded border shadow h5">'.$u_title.'</div></a></div>';



  }




} 
else {
  echo '<div class="m-1 bg-white p-3 rounded border shadow h5 text-danger">No Result Found</div>';
}


echo '</div>';



}

 