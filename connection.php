<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysqli_connect("localhost","root","","product_reshm");
    $query=mysqli_query($con, "select * from product where product_prodTitle LIKE '%{$key}%'");
    while($row=mysqli_fetch_assoc($query))
    {
      $array[] = "<a href='u/product/".$row['product_url']."'>".$row['product_prodTitle']."</a>";
    }
    echo json_encode($array);
    mysqli_close($con);
?>