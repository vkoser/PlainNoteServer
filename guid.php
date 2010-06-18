<?

// Generate Guid 
function NewGuid() { 
  $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
      substr($s,0,8) . '-' . 
      substr($s,8,4) . '-' . 
      substr($s,12,4). '-' . 
      substr($s,16,4). '-' . 
      substr($s,20); 
    return $guidText;
}
// End Generate Guid 

?>