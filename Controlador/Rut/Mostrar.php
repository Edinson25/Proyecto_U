<?php
$archivos = scandir("../Controlador/Rut/Documentos_Rut");
$num=0;
for ($i=2; $i<count($archivos); $i++)

{$num++;
   $nombre_archivo="../Controlador/Rut/Documentos_Rut/Rut Innapsis.pdf";
?>
<p>  
 </p>
    <tr>
      
      <th scope="row"><?php echo $num;?></th>
      <td><?php echo $archivos[$i]; ?></td>
      <td><a title="Descargar Archivo" href="../Controlador/Rut/Documentos_Rut/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"> <center><span class="fas fa-download" aria-hidden="true"></span></center> </a></td>
      <td><a title="Eliminar Archivo" href="../Controlador/Rut/Eliminar.php?name=../Rut/Documentos_Rut/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> <center><span class="fas fa-trash-alt" aria-hidden="true"></span></center> </a></td>
      <td><a title="Visualizar Archivo" href="../Controlador/Rut/Documentos_Rut/<?php echo $archivos[$i]; ?>" style="color: blue; font-size:18px;"><center><span class="fas fa-eye"></span></center> </a></td>
      
 <?php }?> 