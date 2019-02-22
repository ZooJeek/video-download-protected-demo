<?php
session_start();
if($_SESSION['token']){
    unset($_SESSION['token']);
    header('Location:/normal.mp4');
} else {
    header('Location:/ban.mp4');
}
