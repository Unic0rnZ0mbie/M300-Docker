<!DOCTYPE html>
<html>
<body>

<h1>

<?php
mysqli_connect("vagrant_db_1", "root", "Test123", "database") or die(mysqli_error());
echo "MySQL Server Verbunden<br />";
?>

</h1>
<p>Webserver Laurent Zuerrer TEST</p>

</body>
</html>