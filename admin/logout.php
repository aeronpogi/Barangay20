<?php
include("include/session.php");

unset($_SESSION["user_id"]);
header("location: ../../index.php");
?>