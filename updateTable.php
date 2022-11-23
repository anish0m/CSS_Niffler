<?php
$sql= "UPDATE Progress SET Level=Level+1 WHERE UserID='1' AND Topic='Grid'";
$result = $conn->query($sql);
?>