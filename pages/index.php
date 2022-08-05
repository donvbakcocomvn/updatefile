<?php
 
$_SESSION["Username"] = $_GET["user"] ?? "vanglai";
?>
<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex, nofollow" />
    <script type="text/javascript" src="/public/ckfinder/ckfinder.js"></script>
    <link rel="manifest" href="/public/mainfet.json">
</head> 
<body> 
    <form action="/" method="get">
        <input type="text" name="user"> 
        <input type="hidden" value="upfile" name="page"> 
        <button>Gửi</button>
    </form>
</body> 
</html>