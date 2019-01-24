<?php
ob_start();
session_start();
session_unset();
session_destroy();
header("Location: https://chefme.000webhostapp.com/index.php");
                ob_end_flush();