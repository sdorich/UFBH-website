<html>
<head>
<title>UFBH | ASM Online</title>
</head>
<body>

<!--
    This page currently does not work... I still need to figure out how to connect to our animal shelter db
-->

<applet 
codebase = "."
code = "net.sourceforge.sheltermanager.asm.ui.ui.ASMApplet.class"
archive = "asm-applet.jar"
width="100%" 
height="100%">
<param name="jdbcurl" 
value="jdbc:mysql://www.utahbassethoundrescue.com/animalsheltermgr?user=animalsheltermgr&password=********&zeroDateTimeBehaviour\=convertToNull
\=convertToNull" />
</applet>

</body>
</html>