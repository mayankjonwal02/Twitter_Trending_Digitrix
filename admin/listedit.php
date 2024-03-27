<?php error_reporting(0); 
include'check.php';
include'../function.php';
$title = "Edit Post";

include'header.php';







if (isset($_POST['update_id'])){ 

 
$title = $_POST["title"];
$description = $_POST["description"];
$slug = str_replace(" ","-",trim($_POST["slug"]));
$info = $_POST["info"];
$uid = $_POST["update_id"];

$sql = "UPDATE datalist SET  title='$title' , description='$description' , slug='$slug', info='$info' WHERE id= $uid";



if (mysqli_query($conn, $sql)) {
echo'<div class="alert alert-success">  <strong>Success!</strong> updated successfully.</div>';
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

}






if (isset($_GET['id'])){ 
 
$sql = "SELECT * FROM datalist WHERE id =".$_GET['id'];
$rs_result = $conn->query($sql);
while($row = $rs_result->fetch_assoc())
{	

$id = $row["id"];
$title = $row["title"];
$description = $row["description"];
$slug = $row["slug"];
$post = $row["post"];
$update = $row["update"];
$info = $row["info"];

}?>


 
   <div class="shadow-sm rounded p-3 my-3">
 
      <form method="POST" >
         
        
   <div class="row">      


 <div class="col-sm-6 mt-4"> 
<label for="title" class="text-muted form-label text-capitalize">title</label>
<input type="text" class="form-control" id="title" name ="title" value="<?=$title?>">
</div>


 <div class="col-sm-6 mt-4">  
<label for="slug" class="text-muted form-label text-capitalize">slug</label>
<input type="text" class="form-control" id="slug" name ="slug" value="<?=$slug?>">
</div>


 <div class="col-sm-12 mt-4">  
<label for="description" class="text-muted form-label text-capitalize">description</label>
<input type="text" class="form-control" id="description" name ="description" value="<?=$description?>">
</div>




 
</div>


 <div class="mt-4"> <label for="editor" class="text-muted form-label text-capitalize">post</label>
<textarea class="form-control" id="editor"  cols="40" rows="4" name="info" placeholder="Type or Paste POST content here..."required><?php echo $info;?></textarea>
  </div>





         <input type="hidden"  name="update_id" value="<?php echo $id;?>"> 


         <?php if($demoMode){?>
   
<div class="text-danger small p-3 text-center">You can't Update into demo mode. please turn off demo mode</div>
 <?php } else{

echo '<center><button class="btn btn-sm btn-outline-primary m-1" type="submit" name="update">Update</button></center> ';
 } ?>


        
      </form>
   </div>
 



<script>    CKEDITOR.replace('editor');</script>
<?php  }







include'footer.php';
?>