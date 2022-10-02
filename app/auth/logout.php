<?php 
session_start();
session_destroy();
session_unset();

header('Location:  /klinik/landing');
exit;
