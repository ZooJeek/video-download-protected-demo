<?php
session_start();
if($_SESSION['token'] == '1254'){
    unset($_SESSION['token']);
    header('Location:/normal.mp4');
} else {
    header('Location:/ban.mp4');
}
