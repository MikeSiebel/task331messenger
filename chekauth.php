<?php
session_start();
if ($_SESSION['loggedin'] == NULL) {
             header('Location: index.php');    
        } else {
           header('Location: chat\index.php');
        }    
  