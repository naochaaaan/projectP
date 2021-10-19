<?php
$new = htmlspecialchars($_GET['Textbox'], ENT_QUOTES);
print $new.'が送られました';
?>