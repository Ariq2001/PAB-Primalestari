<?php

session_start();
unset($_SESSION['nama']);
unset($_SESSION['level']);
// session_destroy($_SESSION['nama']);
// session_destroy($_SESSION['level']);

header('location:../');

?>