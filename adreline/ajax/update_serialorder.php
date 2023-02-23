<?php

require_once('../lib/config.php');
$id=$_REQUEST['id'];
$serial_order =$_REQUEST['serial'];
$page=$_REQUEST['page'];


if($page=='female_ecomm')
{ 

$update_status="UPDATE female_ecomm_categories SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();
}

if($page=='female_ecomm_images')
{ 

$update_status="UPDATE female_ecomm_shoot_images SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();

}

if($page=='male_ecomm')
{ 

$update_status="UPDATE male_ecomm_categories SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();

}





if($page=='male_style_ecomm')
{ 

$update_status="UPDATE male_style_ecomm_categories SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();

}




if($page=='femalestyle_ecomm')
{ 

$update_status="UPDATE female_style_ecomm_categories SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();

}




if($page=='male_ecomm_images')
{ 

$update_status="UPDATE male_ecomm_shoot_images SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();

}



if($page == 'products_ecomm' ){

$update_status="UPDATE product_ecomm_categories SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();
   
}



if($page == 'products_ecomm_images' ){

$update_status="UPDATE product_ecomm_shoot_images SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();
   
}



if($page == 'kids_ecomm' ){

$update_status="UPDATE kids_ecomm_categories SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();
   
}



if($page == 'kids_images' ){

$update_status="UPDATE kids_ecomm_shoot_images SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();
   
}



if($page == 'kids_style_shoot_images' ){

$update_status="UPDATE kids_style_shoot_images SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();
   
}



if($page == 'male_style_ecomm_images' ){

$update_status="UPDATE malestyle_ecomm_shoot_images SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();
   
}



if($page == 'female_style_ecomm_images' ){

$update_status="UPDATE femalestyle_ecomm_shoot_images SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();
   
}



if($page == 'products_creative_ecomm' ){

$update_status="UPDATE product_creative_ecomm_categories SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();

}

if($page == 'guidelines_ecomm' ){

$update_status="UPDATE guidelines_images SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();

}


if($page == 'fashion_accessories_ecomm_images' ){

$update_status="UPDATE fashion_accessories_ecomm_shoot_images SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();

}





if($page == 'international_model' ){

$update_status="UPDATE international_model SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();

}


if($page == 'indian_model' ){

$update_status="UPDATE indian_model SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();

}




if($page == 'products_creative_ecomm_images' ){

$update_status="UPDATE creative_products_ecomm_shoot_images SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();

}





if($page == 'ghost_ecomm_images' ){

$update_status="UPDATE ghost_ecomm_shoot_images SET serial='".$serial_order."',updated_on=now() where id='".$id."' ";
$stmt = $conn->prepare($update_status);
$stmt->execute();

}




