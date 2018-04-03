<!-- Новости -->
<?php 
$mysqli = @new mysqli('localhost', 'root', '', 'DataBase');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
  $result_set = $mysqli->query('SELECT Title, Text, IMG FROM News');
  echo '<div class="row-container">';
  while ($row = $result_set->fetch_assoc()) {
       echo '<div class="column-container flex1">'.
            '<div class="news">'.
                '<h3>'.$row['Title'].'</h3>'.
                $row['Text'].
                "<img src='" . $row['IMG'] . "' alt='' />"
           .'</div>'
           .'</div>';
  }
  echo '</div>';
  $result_set->close();
  $mysqli->close();
?>
</div>