<pre>
<?php

  $jdbc_url = 'jdbc:google:rdbms//project_name:instance_name';
  $db = mysql_connect($jdbc_url);

  $result = mysql_query('SHOW DATABASES', $db);

  while (($row = mysql_fetch_assoc($result))) {
    var_dump($row);
  }

?>