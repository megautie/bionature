<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bionature - Potencial de Biogas</title>
<link href="style/body.css" rel="stylesheet" type="text/css" />
<link href="style/styles.css" rel="stylesheet" type="text/css" />
</head>
<?php
$fichier='xls/Calculos_Algoritmo.txt';
$contenu_array = file($fichier);
?>

<body>
<div id="conteneur">
<div id="logo"><img src="image/logo.png" width="213" height="86" alt="logo bionature" border="0"/></div>

<div id="info">
<h2>Con la materia orgánica del desecho, se puede generar :</h2>
 <li> 
    <input name="min" type="text" disabled="disabled" value="10" size="6" maxlength="7" />
    <label> - </label>
    <input name="max" type="text" disabled="disabled" value="10" size="6" maxlength="7" />
    <label>Nm3 de biogás al mes (60% de metano)</label>
 </li>
 <li>
 <label>Al utilizarlo como fuente de energía eléctrica, puede producir</label>
     <input name="minE" type="text" disabled="disabled" value="10" size="6" maxlength="7" /><label> - </label><input name="maxE" type="text" disabled="disabled" value="10" size="6" maxlength="7" /> <label>kWh/mes de energía, lo que equivale a utilizar un hervidor eléctrico entre </label><input name="minV" type="text" disabled="disabled" value="10" size="6" maxlength="7" /><label> y </label><input name="maxV" type="text" disabled="disabled" value="10" size="6" maxlength="7" /><label> veces, o ver la televisión durante </label><input name="minT" type="text" disabled="disabled" value="10" size="6" maxlength="7" /><label> a </label><input name="maxT" type="text" disabled="disabled" value="10" size="6" maxlength="7" /><label> horas. </label>

 </li>
</form>
</div>
<?php
print_r($contenu_array);
?>
<div class="cadre" id="footer"><a href="faq.php">FAQ</a></div> 
</div>

</body>
</html>