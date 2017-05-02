<?php

  $name = $_GET['name'];
  $callback = $_GET['callback'];
  echo $callback.'("'.$name.'","age":34)';

?>