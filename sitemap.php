<?php header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>
	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemalocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'; 
	include'function.php'; 	
	

$sql = "SELECT * FROM datalist order by id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

$id = $row["id"];
$slug = $row["slug"];
$path = "https://$host".$slug;

 echo '
        <url>
            <loc>' .$path. '</loc>
            <changefreq>daily</changefreq>
            <priority>0.8000</priority>
        </url>';

  }
} 

echo '</urlset>';