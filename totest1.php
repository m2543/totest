<?php
echo strftime('%c', $get_time);
echo "<br/>";
echo strftime('%d %B, %Y (%A)', $get_time);
echo "<br/>";

echo "ตั้งค่า locale เป็นไทย<br/>";
setlocale(LC_ALL, 'thai');                   

echo strftime('%c', $get_time);
echo "<br/>";
echo strftime('%d %B, %Y (%A)', $get_time);
echo "<br/>";
echo strftime('%x', $get_time);
echo "<br/>";
?>