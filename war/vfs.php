<pre>
<?php

  $filename = 'test.txt';
  var_dump(file_get_contents($filename));

  file_put_contents($filename, 'modified at time ' . date('Y-m-d H:i:s O'));
  var_dump(file_get_contents($filename));

?>