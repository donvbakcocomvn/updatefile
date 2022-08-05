<?php
session_start();
$page  = $_GET["page"] ?? "index";
include "pages/{$page}.php";
