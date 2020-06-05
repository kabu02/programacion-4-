

<!DOCTYPE html>
<html>
    <head>
   
     <meta charset="UTF-8">
     <title>inicio</title>
     <link rel="stylesheet"  href="css/estilos.css">
     <link rel="stylesheet"  href="css/fonts.css">
     
    </head>            


 <header>
     <nav>
            <ul>
			    <li> <img src="imag/logoUP.png" width="150px" height="80px"></li> <br>
                          <font color="#FFFFFF"><h4><?php echo $_POST["nombre"]; ?> </h4> </font>
                         <font color="#FFFFFF"><h4> <?php echo $_POST["email"]; ?> </h4></font>
                
             </ul>
     </nav>
 <br><br
 
 <p> <font color="blue"> <h2>RETIRO E INCLUSIÓN WEB </h2></font></P
 <br><br>
<table width="500" border="0" align="center" cellspacing="10"
  bordercolor="black" bgcolor="#ECF0F1 "> 

<th colspan="4" bgcolor="#ADD8E6"><h3> <font color="blue">Asignaturas propuestas para la Retirar</font> </h3></th> 
  <tr> 
    <td bgcolor="#ADD8E6">Economia </td>
	<td><input type="submit" name ="botom1" value ="Retirar"><td>
  </tr> 
 <tr> 
    <td bgcolor="#ADD8E6"> Redes</td> 
	<td><input type="submit" name ="botom1" value ="Retirar"><td>
  </tr>  
      <td bgcolor="#ADD8E6">logica </td> 
	  <td><input type="submit" name ="botom1" value ="Retirar"><td>
  </tr> 
 <tr> 
    <td bgcolor="#ADD8E6">matematica</td>
	<td><input type="submit" name ="botom1" value ="Retirar"><td>
  </tr>  
  
</table>
<br><br>
<table width="500" border="0" align="center" cellspacing="10"
  bordercolor="black" bgcolor="#ECF0F1 "> 

   <th colspan="4" bgcolor="#ADD8E6" ><h3><font color="blue">Asignaturas propuestas para la inclusión</h3></th>
  <tr> 
    <td bgcolor="#ADD8E6">Programación 4</td> 
	<td><input type="submit" name ="botom1" value ="Incluir"><td>
  </tr> 
 <tr> 
    <td bgcolor="#B0E0E6"> legislación informatica </td> 
	<td><input type="submit" name ="botom1" value ="Incluir"><td>
  </tr>  
      <td bgcolor="#ADD8E6"> comercio internacional </td> 
	  <td><input type="submit" name ="botom1" value ="Incluir"><td>
  </tr> 
 <tr> 
    <td bgcolor="#ADD8E6">sistema de información</td> 
<td><input type="submit" name ="botom1" value ="Incluir"><td>
  </tr>  
  
</table>


</body>
</html>