<?php
echo "<p>Examples of Delphes cards settings:</p>";
$path = "../../gh-pages/delphescards";

$dh = opendir($path);
$i=1;
echo "<ul>";
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin" && $file != "download") {
        echo "<li> <a href='$path/$file'>$file</a></li>";
        $i++;
    }
}
echo "</ul>";
closedir($dh);
?> 
