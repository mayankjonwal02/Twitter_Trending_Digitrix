<?php

$sql = "SELECT * FROM datalist WHERE id = '1'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$id = $row["id"];
$post_name = $row["title"];
$post_description = $row["description"];
$slug = $row["slug"];
$country = cleanwords($row["country"]);
$country2 = $row["country"];
$city = cleanwords($row["city"]);
$country_code = $row["country_code"];
$flag = "/flags/1x1/earth.svg";
$title = $post_name;
$description = $post_description;
include'header.php';
$extro = 0;

//$lastupdate = $row["lastupdate"];
} else {
   header("Location: /404");
}

 $data = twitter(1);
 

    $top = $data[0]["top"];
      $hot = $data[0]["hot"];
//$info = $row["info"];

if($city){
 $u_title = "$city ( $country )";
  $u_description = "Twitter Trending hashtag and topics from $city ( $country ) | Today Trending hashtag and topics on $city ( $country ) Twitter";
}
 
else{
 $u_title = "$country";
  $u_description = "Twitter Trending hashtag and topics from $country | Today Trending hashtag and topics on $country Twitter";
}

 
 ?>





<section class="">
  
   <div class="mb-3">
      <div class="p-2 mt-2 row align-items-center">
         <div class="col-sm-6">
            <div class="d-flex align-items-center">
               <img src="<?=$flag?>" class="codehap_IMG" width="70" height="auto">
               <div>
                  <h1 class="m-0 p-0 h3 ms-2"><?=ucwords($u_title)?></h1> 

                  <p class="text-sm ms-2 mb-0 d-none d-md-block"><?=$u_description?>.</p>
               </div>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="h5 m-0">Top Hashtags in <strong><?=$u_title?></strong></div>
            <?=$top?>
         </div>
         <div class="col-sm-3">
            <div class="h5 m-0">Trending Hashtags<strong> <?=$u_title?>:</strong></div>
            <?=$hot?>
         </div>
      </div>
   </div>
</section>


<?php 
// if (file_exists("ads_/3.txt")){
//     include'ads/3.php';
// } 
?>

 
<div class="d-flex justify-content-between "> 
  <button class="codehap_slide_btn bg-warning rounded-circle fs-1 ps-4 pe-4 pt-2 pb-2 text-white" id="slideLeft" type="button" style="">
   <!-- <?=$svg_left?> -->
   <-
</button>
    <button class="codehap_slide_btn fs-1 bg-warning rounded-circle ps-4 pe-4  pt-2 pb-2 text-white" id="slideRight" type="button">
      <!-- <?=$svg_right?> -->
      ->
   </button>
</div>

<div class="d-flex mb-3 codehap_list" id="codehap_container">

 <?php  
$count= 0;
foreach ($data as $key => $value) {
  echo '<div class="d-flex mt-3">
<ul class="list-group m-1" style="width:250px;">
  <li class="list-group-item active-'.$count++.' h5 m-0 " aria-current="true">'.codehap_time($key).'</h3>';
 $count_hastags = 1; foreach (array_filter($value['data']) as $data) {
  $data = explode('@2@',$data);
  $hashtag = '';
  $hashtag_count = '10K+';
  if($data[0]){
$hashtag = $data[0];
  }
  if(isset($data[1])){
$hashtag_count = $data[1];
  }
  
   $count_hastag = $count_hastags++;
   $url1 =  "http://twitter.com/search?q=".urlencode($hashtag);
   $url2 = "https://twitter.com/intent/tweet?text=".urlencode("$hashtag currently trending at no:{$count_hastag} in India with {$hashtag_count} tweets. 
$current_url");


?>
<li class="list-group-item">
<div class="d-flex">
<div class="me-3 text-muted"><?=$count_hastag?></div><div>


 <div class="fw-bold line-clamp text-decoration-none cur" onclick="loadDynamicContentModal('<?=$hashtag?>','<?=$count_hastag?>','<?=$hashtag_count?>','<?=$url1?>','<?=$url2?>')">
     
     <span id="select_txt_<?=$count_hastag?>"><?=$hashtag?></span>
     
     </div>



 
<div class="small"><?=$hashtag_count?> tweets</div></div>
</div>
</li> 


<?php

}

echo '</ul></div> ';

}
 

 ?></div>





 







<?php 
// if($info){

// echo'<div class="card">
//    <div class="card-body pb-0">

// '.$info.'
//   </div>
// </div>
// ';

// }
?>




</div>




<script>

function loadDynamicContentModal(hashTag,rank,total,url,url2) {
document.getElementById("hashTag_id").innerText = hashTag;
document.getElementById("mainHashtag").innerText = hashTag;
document.getElementById("Hashtag2").innerText = hashTag;
document.getElementById("codehap_rank").innerText = "#"+rank;
document.getElementById("codehap_rank2").innerText = "no:"+rank;
document.getElementById("total1").innerText = total;
document.getElementById("total2").innerText = total;

document.getElementById("tit").href= url2;
document.getElementById("titall").href= url;


$('#staticBackdrop').modal('show');
}

 


function copy_data(containerid) {
  var range = document.createRange();
  range.selectNode(containerid); //changed here
  window.getSelection().removeAllRanges(); 
  window.getSelection().addRange(range); 
  document.execCommand("copy");
  window.getSelection().removeAllRanges();
  //alert("data copied");
}


$(document).on('click', '.codehap_field', function (e) {
     e.preventDefault();
     // $(this).closest('tr').css("background-color", "#87fc7e");
      var that = $(this);
    that.html('Copied!');
    that.closest( "tr" ).css("background-color", "#87fc7e");
    var invrl = setInterval(function () {that.html('Copy'); that.closest( "tr" ).css("background-color", ""); clearInterval(invrl) }, 500);
                });
</script>



<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <div class="modal-title" id="hashTag_id"></div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div id="msgP">
               <p><b id="mainHashtag">#hash</b> Currently trending at <b id="codehap_rank2"> no:1</b> in <b><?=ucwords($u_title)?> </b> with <b id="total1">count</b> tweets.</p>
               <table class="table">
                  <tbody>
                     <tr>
                        <th class="active">Rank</th>
                        <td><span class="badge bg-secondary" id="codehap_rank">#1</span></td>
                     </tr>
                     <tr>
                        <th class="active">Hashtag</th>
                        <td id="Hashtag2">#</td>
                     </tr>
                     <tr>
                        <th class="active">Tweet Count</th>
                        <td id="total2">count</td>
                     </tr>
                     <tr>
                        <th class="active">Location</th>
                        <td><?=ucwords($u_title)?></td>
                     </tr>
                     <tr>
                        <th class="active">Time</th>
                        <td><?=date('d/m/Y h:m A')?></td>
                     </tr>
                     <tr>
                        <th class="info" colspan="2" style="text-align:center"><a id="tit" href="#" class="btn btn-success btn-lg" target="_blank">Tweet It</a> <a id="titall" href="#" target="_blank" class="btn btn-warning btn-lg">All Tweets</a> <button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal">Close</button></th>
                     </tr>
                  </tbody>
               </table>
            </div>
            <center>
               Advertisement
            </center>
         </div>
      </div>
   </div>
</div>







































 