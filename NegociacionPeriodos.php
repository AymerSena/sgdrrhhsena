<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/plantillaConten.css">
    <title>Document</title>
</head>
<body>
<?php
    include("cabecera.php");
?>
<div id="Menu">
        <form  action="" method="POST">
          <br>      
          <p>Seleccione el tipo de ausencia</p>
          <form action="">
              <select name="ausencia" id="">
                  <option value="0">Seleccione</option>
                  <?php
                  require("conexionBD.php");
                  $query="SELECT * FROM tbltiposausen";
                  $rsul = $conexion ->query($query);
                  foreach($rsul as $row){
                      ?>
                      <option value="<?php echo $row["TipID"] ?>"><?php echo $row["TipTipo"] ?></option>
                      <?php
                  }
                  ?>
              </select>
              <button>Solicitar</button>
          </form>
          </div>

          <?php
          if (isset($_POST['ausencia'])){
              $_SESSION["tip"]=$_POST['ausencia'];
              echo $_SESSION["tip"];
            $TipoAusencia=$_SESSION["tip"];
            switch ($_POST['ausencia']){
                case 1:?>

                       <h3>Ingrese fecha de partida vacaciones</h3>
                        <?php 
                    break;?> 
                <?php    
                case 2: ?>
                       <h3>Ingrese fecha de partida Incapacidades</h3> 
                        <?php 
                    break;?> 
                     <?php 
                case '3': ?>
                    <h3>Ingrese fecha de partida Licencias No remuneradas</h3>
                    <?php    
                    break;?>
                    <?php
                case '4': ?>
                   <h3>Ingrese fecha de partida Licencias de maternidad</h3> 
                    <?php    
                    break;?>
                 <?php   
                case '5': ?>
                   <h3>Ingrese fecha de partida Ley maria o licencia de paternidad</h3>
                    <?php    
                    break;?>
                
                <?php   
                case '6': ?>
                   <h3>Ingrese fecha de partida Licencia por luto</h3>
                    <?php    
                    break;?>

                <?php   
                case '7': ?>
                   <h3>Ingrese fecha de partida Beneficio por votación</h3>
                    <?php    
                    break;?>

                <?php   
                case '8': ?>
                   <h3>Ingrese fecha de partida Licencia por matrimonio</h3> 
                    <?php    
                    break;?>    
                <?php default:
                    
                    break;
            }
            
            }
          
          
          ?>
          <?php    
           if($_POST){?>
          
                       <form action="AccionNegociacion.php" method="post">
          
                       <br>  
          
          <p>Dias acumulados por el empleado: 15 </p>

          <input type="submit" name="image" onclick="alert('Vacaciones solicitadas');"img id="vacaciones" src="Iconos_imagenes/IconoSolicitarVa.png" style="float: right;" value="solicitado"/>
          
          <h3>Ingrese fecha de partida</h3>
          
          <input type="date" name="date" id="date" >

          <br>
          <h3>Ingrese fecha de llegada </h3>
          
          <input type="date" name="dated" id="dated" >
          
           </form>
          <br> 
            <?php  }?>

        <?php
    include("pie.php");
    ?>
</body>
</html>