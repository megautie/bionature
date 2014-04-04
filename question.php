<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bionature - Potencial de Biogas</title>
<link href="style/body.css" rel="stylesheet" type="text/css" />
<link href="style/styles.css" rel="stylesheet" type="text/css" />
<SCRIPT LANGUAGE=Javascript SRC="javascript/script.js"> </SCRIPT>
</head>
<body>
<div id="conteneur">
<div id="logo"><img src="image/logo.png" width="213" height="86" alt="logo bionature" border="0"/></div>

<div id="affichage">
<form name="result" id="form1" method="post" action="result.php" >
<h2>Cuánta basura botas en el mes desde tu hogar?</h2>
 <p> 
<input name="weight" type="text" value="10" size="6" maxlength="7" />
         <label>kg</label> 
        
      </p>


  <input name="result" type="submit" value="resultado" onclick="return isANumber(this.form.weight.value)"/>
</form>
</div>
<div class="cadre" id="footer"><a href="faq.php">FAQ</a></div> 
</div>

</body>
</html>