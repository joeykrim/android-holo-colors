<?

  require_once('common-checkbox.php');
    
  $color = $_GET['color'];
  $size = $_GET['size'];
  $holo = $_GET['holo'];
  
  if (isset($color) && isset($size) && isset($holo)) {
  	$cof = new CheckboxOnFocus();
  	$cof->generate_image($color, $size, $holo);
  }
  
?>