<?php
$page = trim($_SERVER['REQUEST_URI'], '/');
if (file_exists("$page.html")) {
    include "$page.html";
} else {
    echo "Страница не найдена";
}
?>
