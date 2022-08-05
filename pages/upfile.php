<?php
 
$_SESSION["Username"] = $_GET["user"] ?? "vanglai";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Uploadfile</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex, nofollow" />
    <script type="text/javascript" src="/public/ckfinder/ckfinder.js"></script>
</head> 
<body>
    <script type="text/javascript">
        function showFileInfo(fileUrl, data, allFiles) {
            var msg = 'The last selected file is: <a href="' + fileUrl + '">' + fileUrl + '</a><br /><br />';
            if (fileUrl != data['fileUrl'])
                msg += '<b>File url:</b> ' + data['fileUrl'] + '<br />';
            msg += '<b>File size:</b> ' + data['fileSize'] + 'KB<br />';
            msg += '<b>Last modified:</b> ' + data['fileDate'];
            if (allFiles.length > 1) {
                msg += '<br /><br /><b>Selected files:</b><br /><br />';
                msg += '<ul style="padding-left:20px">';
                for (var i = 0; i < allFiles.length; i++) {
                    // See also allFiles[i].url
                    msg += '<li>' + allFiles[i].data['fileUrl'] + ' (' + allFiles[i].data['fileSize'] + 'KB)</li>';
                }
                msg += '</ul>';
            }
            this.openMsgDialog("Selected file", msg);
        }
        var finder = new CKFinder();
        finder.basePath = '../';
        finder.height = 600;
        finder.selectActionFunction = showFileInfo;
        finder.create();
    </script>



</body>

</html>