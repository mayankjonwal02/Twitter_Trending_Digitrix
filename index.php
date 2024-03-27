<?php

include "function.php";

 





if (isset($request[1]))
{

    if ($request[1] == "page")
    {   $slug = $request[2];
        include "index_page.php";
    }

    elseif ($request[1] == "404")
    {   
        include "index_404.php";
    }

    else{


        include "index_live.php";

    }



 

}
else
{

    include "index_home.php";
}
include "footer.php";
?>
