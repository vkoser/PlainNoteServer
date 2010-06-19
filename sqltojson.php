<?

function sqltojson($result){

  // iterate over every row
  while ($row = mysql_fetch_assoc($result)) {
    // for every field in the result..
    for ($i=0; $i < mysql_num_fields($result); $i++) {
      $info = mysql_fetch_field($result, $i);
      $type = $info->type;

      // cast for real
      if ($type == 'real')
        $row[$info->name] = doubleval($row[$info->name]);
      // cast for int
      if ($type == 'int')
        $row[$info->name] = intval($row[$info->name]);
    }

    $rows[] = $row;
  }

  // JSON-ify all rows together as one big array
  return json_encode($rows);
}

?>