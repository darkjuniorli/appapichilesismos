<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<div class="container">
<center>
<img src="/logo.png" alt="logo" class="">
<img src="/logo2.png" alt="logo2" width="150" height="150" class="">
</center>
</div>



<table class="table table-hover ">
  <thead>
    <tr class="bg-primary text-white">
      <th scope="col">#</th>
      <th scope="col">Fecha</th>
      <th scope="col">Latitud</th>
      <th scope="col">Longitud</th>
      <th scope="col">Profundidad</th>
      <th scope="col">Magnitud</th>
      <th scope="col">Agencia</th>
      <th scope="col">Ref.Geogragica</th>
      <th scope="col">Fecha Actualización</th>
    </tr>
  </thead>
  <tbody>



<?php

$data = json_decode( file_get_contents('https://api.gael.cl/general/public/sismos'), true );
$cont = 0;


foreach($data as $obj){

	$cont = $cont + 1;	
        $fecha = $obj['Fecha'];
        $latitud = $obj['Latitud'];
        $longitud = $obj['Longitud'];
	$profundidad = $obj['Profundidad'];
	$magnitud = $obj['Magnitud'];
	$agencia = $obj['Agencia'];
	$refgeografica = $obj['RefGeografica'];
	$fechaupdate = $obj['FechaUpdate'];

      //  echo $fecha." ".$latitud." ".$longitud." ".$profundidad." ".$magnitud." ".$agencia." ".$refgeografica." ".$fechaupdate."\n\n\n\n";

   echo' <tr>';
   echo'   <th scope="row">'.$cont.'</th>';
   echo '<td>'.$fecha.'</td>';
   echo '<td>'.$latitud.'</td>';
   echo '<td>'.$longitud.'</td>';
   echo '<td>'.$profundidad.'</td>';
   echo '<td>'.$magnitud.'</td>';
   echo '<td>'.$agencia.'</td>';
   echo '<td>'.$refgeografica.'</td>';
   echo '<td>'.$fechaupdate.'</td>';  



   echo'</tr>';
   
}

?>

  </tbody>
</table>

    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>


</html>




















