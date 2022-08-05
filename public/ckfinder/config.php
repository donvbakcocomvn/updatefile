<?php
session_start();
  
function CheckAuthentication()
{
    return isset($_SESSION["Username"]);
}

// LicenseKey : Paste your license key here. If left blank, CKFinder will be
// fully functional, in demo mode.
$config['LicenseName'] = 'uploadfile.bakco.com.vn';
$config['LicenseKey'] = 'L3U25NS38EH3JNE4937GQFM7D86SVYCG';
$UserName = $_SESSION["Username"];

$baseUrl = '/public/video/' . $UserName . "/";

$baseDir = resolveUrl($baseUrl);
$config['Thumbnails'] = array(
    'url' => $baseUrl . '_thumbs',
    'directory' => $baseDir . '_thumbs',
    'enabled' => true,
    'directAccess' => false,
    'maxWidth' => 100,
    'maxHeight' => 100,
    'bmpSupported' => false,
    'quality' => 80
);

$config['Images'] = array(
    'maxWidth' => 1900,
    'maxHeight' => 1900,
    'quality' => 80
);


$config['RoleSessionVar'] = 'CKFinder_UserRole';

$config['AccessControl'][] = array(
    'role' => '*',
    'resourceType' => '*',
    'folder' => '/',
    'folderView' => true,
    'folderCreate' => true,
    'folderRename' => true,
    'folderDelete' => true,
    'fileView' => true,
    'fileUpload' => true,
    'fileRename' => true,
    'fileDelete' => true
);

$config['DefaultResourceTypes'] = '';
$config['ResourceType'][] = array(
    'name' => 'Video',
    'url' => $baseUrl . 'video',
    'directory' => $baseDir . 'video',
    'maxSize' => "1G",
    'allowedExtensions' => 'mp3,swf,flv,mp4,wmv',
    'deniedExtensions' => 'php'
);


$config['CheckDoubleExtension'] = true;
$config['DisallowUnsafeCharacters'] = false;
$config['FilesystemEncoding'] = 'UTF-8';
$config['SecureImageUploads'] = true;
$config['CheckSizeAfterScaling'] = true;
$config['HtmlExtensions'] = array('html', 'htm', 'xml', 'js');
$config['HideFolders'] = array(".*");
$config['HideFiles'] = array(".*");
$config['ChmodFiles'] = 0777;
$config['ChmodFolders'] = 0777;
$config['ForceAscii'] = false;
$config['XSendfile'] = false;

include_once "plugins/imageresize/plugin.php";
include_once "plugins/fileeditor/plugin.php";
include_once "plugins/zip/plugin.php";

$config['plugin_imageresize']['smallThumb'] = '90x90';
$config['plugin_imageresize']['mediumThumb'] = '120x120';
$config['plugin_imageresize']['largeThumb'] = '180x180';
