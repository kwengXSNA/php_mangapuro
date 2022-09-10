<?php

session_start();
echo "Welcome " . $_SESSION['email'] . "! <br>";
echo "<a href = 'out.php'>logout</a>";

?>