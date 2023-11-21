<html>
<head>

<?php 

function vermerk($vorname, $nachname, $abteilung)
{
    echo "Programmteil von $vorname $nachname, Abteilung $abteilung <br>";
    echo "E-Mail: $vorname.$nachname@$abteilung.telekom.de <br><br>";
}
?>
</head>


<body>
<?php 
vermerk("Marlon", "Schmidt", "GSUS");
vermerk("Marius", "Maurer", "Detecon");
?>

</body>
</html>

