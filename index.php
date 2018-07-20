<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div style="text-align: center">
            <input id="Submit1" type="submit" value="submit" onclick="changepic()" />
            <br />
            <br />
            <img alt="" runat="server" id="imag"  /></div>
    </form>
    <?php
    function changepic(){
    echo "The select function is called.";
    }
  
    ?>
</body>
</html>