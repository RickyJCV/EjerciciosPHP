<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>PHP Desde cero aprenderaprogramar.com</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.27" />
    <style type="text/css">
    body {
        background-color: yellow;
        color: blue;
    }

    h1,
    h2 {
        text-align: center;
        color: blue;
        margin: 0;
        padding: 0;
    }

    div {
        text-align: left;
        background-color: orange;
        height: 250px;
        width: 600px;
        padding: 5px;
        margin: 10px auto;
    }

    thead,
    tr {
        font-size: 24px;

    }

    tbody {
        text-align: center;
    }
    </style>
</head>
</head>

<body>
    <h1>PHP Ejercicio 30 (CU00830B)</h1>
    <h1>Calendario</h1>

    <?php
$Meses=array ("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$DiaSem=array("","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
$Mes=date("n");
$Año=$Meses[$Mes]."&nbsp;de&nbsp;".date("Y");
$Semana=1;
for($i=1;$i<=date('t');$i++) 
	{
        $diaSemana=date('N', strtotime(date('Y-m').'-'.$i));
        $calendario[$Semana][$diaSemana]=$i;
        if ($diaSemana==7){$Semana++;}
        
          
    }

echo"
 <div>
 <table>
    <thead>";
echo "<h1>$Año</h1>";
echo     "<tr>
          <td>$DiaSem[1]&nbsp;</td>
          <td>$DiaSem[2]&nbsp;</td>   
          <td>$DiaSem[3]&nbsp;</td>   
          <td>$DiaSem[4]&nbsp;</td>   
          <td>$DiaSem[5]&nbsp;</td>   
          <td>$DiaSem[6]&nbsp;</td>   
          <td>$DiaSem[7]&nbsp;</td>   
        </tr>
     </thead>
        <tbody>";
        foreach ($calendario as $dias) 
        {
Echo     "<tr>";
		  for ($i=1;$i<=7;$i++)
		  {
			  
				 
			  if ($dias[$i]==date("j"))
			  {
				  echo"<td bgcolor=magenta>$dias[$i]</td>";
			  }
				else if ($i=="7"){echo "<td bgcolor=LightSalmon>$dias[$i]</td>"; }
				else {echo "<td>$dias[$i]</td>";}
			}
 Echo    "</tr>";
		}
echo"	</tbody>
</table> 
 




<br/>

</div>";

?>
</body>

</html>