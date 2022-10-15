<?php
session_start();

// TODO: add config
$conn = new mysqli("localhost", "root", "", "class", 3306) or die ('No database found');
$statement = $conn->query('SELECT * FROM songs');
?>
<table class="table">
  <tr>
    <th>ID</th>
    <th>Song List</th>
  </tr>

  <?php
  while ($row = $statement->fetch_row()) {
    echo("<tr>" .
           "<td>".$row[0]."</td>".
           "<td>".$row[1]."</td>".
          "<tr>");
  }
  ?>
</table>

