<?php
header('Content-disposition: attachment; filename=ecslb.pdf');
header('Content-type: application/pdf');
readfile('ecslb.pdf');
?>