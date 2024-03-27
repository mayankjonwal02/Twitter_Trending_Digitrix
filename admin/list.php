<?php error_reporting(0); 
include'check.php';
include'../function.php';
$title = "File List | Admin Panel";
include'header.php';
include'menu.php';

$cid = $_GET['cid'];
$ord = $_GET['ord'];
$filter = $_GET['f'];
$page_id = $_GET['pn'];
$q = ucwords($_GET['q']);
$u = $_GET['u'];
if(!$ord){
    $ord = "desc";
}
if(!$filter){
    $filter = "id";
}
$path = "?cid=$cid&ord=$ord&q=$q&u=$u&f=$filter&pn=";

 





if($_GET['statusid']){
    $statusid = $_GET['statusid'];
     $status = $_GET['status'];
 
       $sql = "UPDATE files SET dmca='$status' WHERE id=$statusid";

if ($conn->query($sql) === TRUE) {
  echo "updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
       
}



 
if ($_POST['inputpassword'])
{
    $np = $_POST['inputpassword'];
    $nu = $_POST['inputusername'];
    $sql = "UPDATE users SET password='$np', user_name='$nu' WHERE id=1";
    if ($conn->query($sql) === true)
    {
        echo '<div class="h6" style="color:green;"><b>Success: </b>Password Change Successfully</div>';
    }
    else
    {
        echo "Error updating record: " . $conn->error;
    }
}





echo '

<div class="row mb-3">
<div class="col-sm-8">
   <h4>'.$title.'</h4>
</div>
<div class="col-sm-4">
   


 
 <div class="dropdown">
  <button type="button" class="btn btn-outline-secondary dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
    Change Login Detils
  </button>
  <div class="dropdown-menu p-4">
    
    <b>Change Username Password</b>
<form class="text-center" method ="post">
<input type="text" class="mt-1 form-control" name="inputusername" placeholder="type new username" required>
<input type="password" class="mt-1 form-control" name="inputpassword" placeholder="type new Password" required>
<div class="mt-2">


'; if($demoMode){?>
    
<div class="text-danger small py-3">You can't Update into demo mode. please turn off demo mode
</div>
 <?php } else{

echo '<button type="submit" class="btn btn-primary mb-3">Change</button>';
 }  echo'



</div>
</form>


  </div>
</div>


 

 
 




</div>
</div>
<div class="row mb-3">
   <div class="col">
      <a class="btn btn-outline-primary btn-sm m-1" href="?ord=desc&q='.$q.'&f=id&pn=">New2Old</a>
      <a class="btn btn-outline-primary btn-sm m-1" href="?ord=asc&q='.$q.'&f=id&pn=">Old2New</a>
      <a class="btn btn-outline-primary btn-sm m-1" href="?ord=asc&q=&f=title&pn=">a2z</a>
      <a class="btn btn-outline-primary btn-sm m-1" href="?ord=desc&q=&f=title&pn=">z2a</a>
      <a class="btn btn-outline-primary btn-sm m-1" href="?">Clear</a>
   </div>
   <div class="col-sm-4">
      <form action="" method="get">
          
 <div class="input-group mb-3">
  <input type="text" name="q"  class="form-control" placeholder="Search here"  aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
</div>
      </form>

   </div>
</div>

 

<div class="table-responsive">
<table class="bg-white table mt-1 table-striped table-bordered align-middle">
  <thead class="thead-secondary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Slug</th>
        <th scope="col">Country</th>
         <th scope="col">City</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>';

if ($q)
{
     
    $sql1 = "SELECT COUNT(id) from datalist where  title LIKE '%$q%' or country LIKE '%$q%' or city LIKE '%$q%'";
    $sql2 = "select * from datalist where title LIKE '%$q%'  or country LIKE '%$q%' or city LIKE '%$q%' order by $filter $ord";

}




elseif($_GET['f']){
     $sql1 = "SELECT COUNT(id) from datalist";
    $sql2 = "select * from datalist order by $filter $ord";
}

else
{
  $sql1 = "SELECT COUNT(id) from datalist";
$sql2 = "select * from datalist order by $filter $ord";
}

 

$query = mysqli_query($conn, $sql1);
$row = mysqli_fetch_row($query);
$rows = $row[0];

$page_rows = 10;
$last = ceil($rows / $page_rows);
if ($last < 1)
{
    $last = 1;
}
$pagenum = 1;
if (isset($page_id))
{
    $pagenum = preg_replace('#[^0-9]#', '', $page_id);
}
if ($pagenum < 1)
{
    $pagenum = 1;
}
else if ($pagenum > $last)
{
    $pagenum = $last;
}
$limit = 'LIMIT ' . ($pagenum - 1) * $page_rows . ',' . $page_rows;

$sql2 = "$sql2 $limit";

$query = mysqli_query($conn, $sql2);
$textline1 = "Total  : (<b>$rows</b>)";

if ($rows > $page_rows)
{
    $textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
}
$paginationCtrls = '';

if ($last != 1)
{
    if ($pagenum > 1)
    {
        $previous = $pagenum - 1;
        $paginationCtrls .= '<a  href="' . $path . $previous . '"><span class="space btn btn-sm btn-outline-primary m-1">Previous</span></a>';
        for ($i = $pagenum - 4;$i < $pagenum;$i++)
        {
            if ($i > 0)
            {
                $paginationCtrls .= '<a  href="' . $path . $i . '"><span class="space btn btn-sm btn-outline-primary m-1">' . $i . '</span></a>';
            }
        }
    }
    $paginationCtrls .= '<span class="btn btn-sm btn-outline-dark m-1 disabled">' . $pagenum . '</span>';
    for ($i = $pagenum + 1;$i <= $last;$i++)
    {
        $paginationCtrls .= '<a  href="' . $path . $i . '"><span class="space btn btn-sm btn-outline-primary m-1">' . $i . '</span></a>';
        if ($i >= $pagenum + 4)
        {
            break;
        }
    }

    if ($pagenum != $last)
    {
        $next = $pagenum + 1;
        $paginationCtrls .= '<a  href="' . $path . $next . '"><span class="btn btn-sm btn-outline-primary m-1">Next</span></a> ';
    }
}
 
while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
{

$id = $row["id"];
$title = $row["title"];
$description = $row["description"];
$slug = $row["slug"];
$lastupdate = $row["lastupdate"];
$info = $row["info"];
$country = cleanwords($row["country"]);
$city = cleanwords($row["city"]);
 $port = "";
$path = "https://$host".$slug;
 

 /*

if($city){
 $u_title = "$city ($country) | Today Trending hashtag and topics on Twitter";
  $u_description = "Twitter Trending hashtag and topics from $city ($country) | Today Trending hashtag and topics on $city ($country) Twitter";
}
 
else{
 $u_title = "$country | Today Trending hashtag and topics on Twitter";
   $u_description = "Twitter Trending hashtag and topics from $country | Today Trending hashtag and topics on $country Twitter";
}
    
   
 $sql = "UPDATE datalist SET title='$u_title',description='$u_description' WHERE id=$id"; if ($conn->query($sql) === TRUE) {}  
 */

    
echo'<tr>
<td style="width:60px;" class="align-middle">' . $id . '</td>
<td class="align-middle"><a class="text-decoration-none" href="'.$path.'" target="_blank">'.ucwords($title).'</a></td>
<td class="align-middle">'.$description.'</td>
<td class="align-middle">'.$slug.'</td>
<td class="align-middle">'.$country.'</td>
<td class="align-middle">'.$city.'</td>

    


<td style="width:100px;"  class="align-middle">


<a href="listedit.php?id='.$id.'" class="codehap_edit_file btn-sm btn btn-warning m-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a>



 


</td>
</tr>';         

} echo '</tbody></table></div>';
if ($rows > 0)
{ ?>
<div class="text-center pt-2">   
  <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
  <?php echo ' ' . $textline1 . '  ' . $textline2 . ' '; ?>
</div>
<?php
}
?>



<div class="modal fade" id="codehap_delete_file_modelModal" tabindex="-1" aria-labelledby="codehap_delete_file_modelModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="codehap_delete_file_modelModalLabel">Are You Sure To Delete Data?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onClick="history.go(0);"></button>
         </div>
         <div class="modal-body text-center">
            <h5 id="eventTitle" class="text-danger"></h5>
            
            <form id="action2">
               <input type="hidden" name="event" value="fileDelete">
               <input type="hidden" name="eventId" id="eventId">
               <input type="hidden" name="events_id" id="events_id">
              

               


<?php if($demoMode){?>
   
<div class="text-danger small p-3">You can't Delete into demo mode. please turn off demo mode</div>
 <?php } else{

echo '<button id="2" type="submit" class="btn btn-danger codehap_submit_btn2" data-id="2">Delete</button>';
 } ?>




               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"onClick="history.go(0);">Cancle</button>
            </form>
            <div class="codehap_ajax_result"></div>
            <div class="codehap_ajax_wating mt-2" style="display:none;">
               <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                  <span class="visually-hidden">Loading...</span>
               </div>
            </div>
 
            
         </div>
      </div>
   </div>
</div>





 
 

 <script type="text/javascript">
$(document).ready(function() {
    
    $(document).on("click", ".codehap_submit_btn2", function () {
     var codehap_form_id = $(this).data('id');


    
     $('#action'+codehap_form_id).submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: 'action.php',
            data: $(this).serialize(),
            beforeSend: function () {
                $(".codehap_ajax_wating").show()
            },
            success: function (e) {
                $(".codehap_ajax_result").html(e)
            },
            error: function (e) {
                $(".codehap_ajax_result").html("Something Went Wron! Please try again later!")
            },
            complete: function () {
                $(".codehap_ajax_wating").hide()
            }
       });
     });
     
    });
    
});





 


$(document).on("click", ".codehap_delete_file", function () {
     var codehap_edit_file_id = $(this).data('id');
     var codehap_edit_file_s_id = $(this).data('s_id');
      var codehap_edit_file_title = $(this).data('name');
     $(".modal-body #eventId").val(codehap_edit_file_id);
     
       $(".modal-body #events_id").val(codehap_edit_file_s_id);
       
document.getElementById('eventTitle').innerHTML = codehap_edit_file_title;
});


</script>




















<div class="modal fade" id="upload_singleModal" tabindex="-1" aria-labelledby="upload_singleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="upload_singleModalLabel">Upload Single or Multipal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="ringtone-upload-cancel" onClick="history.go(0);"></button>
      </div>
      <div class="modal-body bg-light">
       <?php include'model_upload_single.php';?>
      </div>
    </div>
  </div>
</div>





<script>
$(".like-button").click(function(){
var a = $(this).data("eid");
var $_this = $(this);
$.ajax({
    type: "POST",
    dataType: "json",
    url: "action.php",
    data: {a:a},
    success: function(data) {
        alert (data); // 20     
 }
    });
});
</script>




 <?php
include 'footer.php';

?>
