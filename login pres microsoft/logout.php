<?php
session_start();
session_destroy();
unset($_SESSION['user_id']);
unset($_SESSION);
header("location: https://login.microsoftonline.com/unob.onmicrosoft.com/oauth2/logout?post_logout_redirect_uri=https://localhost");