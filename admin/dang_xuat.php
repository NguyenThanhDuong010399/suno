<?php

if(isset($_SESSION['ad_email'])) {
    unset($_SESSION['ad_email']);
}

header('Location: dang_nhap.php');