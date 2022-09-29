<?php 
  include 'database.php';

  $stmt = $pdo->prepare("SELECT * FROM todo");
  $stmt->execute();
  $result = $stmt->fetchAll();
  echo('<h3>ToDo List</h3>');
  echo('<ul style="list-style-type:none">');
  foreach($result as $row){
    $id = $row['id'];
    echo("<li> <input type='checkbox' id='$id' onChange=updateStatus(this.id) value='1'/>");
    echo($row['todo']);
    echo("</li>");
  }
  echo('</ul>');
?>

<script>
  function updateStatus(id){
    alert('id: '+id);
    var status = document.getElementById(id).checked;
    alert('status: '+status);
    }
</script>