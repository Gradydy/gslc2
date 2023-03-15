<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Login</title>
<script type="text/javascript">
    window.onload = function () {
    function websiteBeoordelen () {
        var code = document.getElementById("code").value;
        if (code == 101101) {
            document.getElementById('button').onclick = function() {
                location.href = "\kenzio";
            }
        }
        else {
            document.write("The code is wrong, try again!");
        }
      return false;   
    }
   document.getElementById('button').onclick = websiteBeoordelen;
};
</script>
</head>

<body>
<div id="wrap">

<table border="0">
<form method="post">
<label>Code:</label><input name="code" id="code" type="text" class="input"/>
<br /><br />
<label>&nbsp;</label><input name="submit" type="submit" id="button" value="Login" class="button" style="cursor:pointer"/>
</form>
</table>

</div>

</body>
</html><?php /**PATH C:\Folder kuliah\tugas profiling\profile_webprog\resources\views/testdoang.blade.php ENDPATH**/ ?>