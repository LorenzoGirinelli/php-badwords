<?php
    $text="ciao mi chiamo Lorenzo";
?>
<h1><?php echo $text ?></h1>

<?php
    echo strlen($text);
    $name=$_GET["name"];
    $asterischi="*****";
?>
<p><?php echo $name ?></p>

<?php
    $textnew = str_replace($name,$asterischi,$text);
    echo $textnew;
    echo "<br>";
    echo strlen($textnew);
?>