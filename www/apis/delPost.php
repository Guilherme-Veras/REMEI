<?php

$id = $_POST['id'];

$result = $conn->query("DELETE FROM posts WHERE pos_id=".$id);

?>