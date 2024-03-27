<?php
 

$sql = "SELECT * FROM page WHERE slug ='$slug'";

 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
$row = $result->fetch_assoc();
$id = $row["id"];
$page_title = $row["title"];
$post_content = $row["post_content"];
 

 


} else {
  echo "0 results";
}

 



$title = "$page_title All State Regional Transport Office (RTO) - RTO Services";
$description = "$page_title Here is a Description All State Regional Transport Office (RTO) - RTO Services";
include'header.php' ?>




  

<div class="bg-white p-5 rounded shadow">

<div class="border-start border-primary border-2 px-2">
  
<h1 class="text-uppercase h3"><?=$page_title?></h1>
</div>


<!-- <?php if (file_exists("ads_/3.txt")){
    include'ads/3.php';
} ?> -->


<?=$post_content?>




</div>
























</div>

