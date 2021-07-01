


<!-- if($_SERVER["REQUEST_METHOD"] == "POST")
{
   if(isset($_POST['add_to_cart']))
  {
	  if(isset($_SESSION['cart']) && $_SESSION['loggedin'] = true)
    {
      $count = count($_SESSION["cart"]);
			$item_array = array(
				'id'		=>	$_GET["id"],
                'image'		=>	$_POST["image"],
				'name'		=>	$_POST["name"],
				'price'		=>	$_POST["price"]
      );
			
			$_SESSION["cart"][$count] = $item_array;
      print_r($item_array);
    } 
    
    else
      {
        $item_array = array(
          'id'			=>	$_GET["id"],
          'name'		=>	$_POST["name"],
          'image'		=>	$_POST["image"],
          'price'		=>	$_POST["price"],
          
        );
        $_SESSION["cart"][0] = $item_array;

  }
}
} -->
