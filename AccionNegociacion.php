<?php
    require("conexionBD.php");

    $fechaparti=$_POST['date'];
    $fechasoli=$_POST['dated'];

    $contrato= date('2021-03-05');

    $parti= date_create($fechaparti);
    $soli=date_create($fechasoli); 


   

    function CalcuDias($fechaparti,$fechasoli){

        $alfa= date_create($fechaparti);
        $beta= date_create($fechasoli);
        $interval= date_diff($alfa,$beta);
        $tiempo=array();

        


        foreach ($interval as $valor){

            $tiempo[]=$valor;

        }
        return $tiempo;





    }

    $free=CalcuDias($fechaparti,$fechasoli);

    
    






    
    
     
    /*$sql= "INSERT INTO tblhistovaca(HisCodigo,HisFechaInicio,HisFechaRegreso,HisFechaSolicitud,HisEstado,HisForSoliciva) VALUES (null,'$fechaparti','$fechasoli',null,null,null)"; */

  



    echo $fechaparti. "<br/>";
    echo $fechasoli. "<br/>";
    echo  "<br/>";
    $free=CalcuDias($fechaparti,$fechasoli);
    echo " Dias que hay entre fechas ". $free[2];
    echo  "<br/>";

    $fecha1 = strtotime($fechaparti); 
    $fecha2 = strtotime($fechasoli); 
    $miContador=-1;
    for($fecha1;$fecha1<=$fecha2;$fecha1=strtotime('+1 day ' . date('Y-m-d',$fecha1))){ 

    if((strcmp(date('D',$fecha1),'Sun')!=0) and (strcmp(date('D',$fecha1),'Sat')!=0)){
        $miContador++;
    }
}
require("conexionBD.php");
$hoy = new DateTime('now', new DateTimeZone('America/Bogota')); 
$finaly= $hoy->format('Y-m-d');


$vacaciones= CalcuDias($finaly,$contrato);

session_start();
$TipoAusencia= $_SESSION["tip"];
/*echo   $_SESSION["tip"]  ."<--- Tipo de ausensia " . "  por la variable --> ".$TipoAusencia."<- esta si es si si 100 real no feik"; */

$sql= "INSERT INTO `tblausencias`(`AusForTipAus`, `AusFechaInicio`, `AusFechaRegreso`, `AusFechaSolicitud`, `AusEstado`, `AusFechaInterr`, `AusForUsuCed`, `AusDiasSolici`, `AusDocumen`) VALUES ( '$TipoAusencia', '$fechaparti', '$fechasoli', '$finaly', 'Solicitado','$fechasoli' , NULL, '$miContador', 'subido')";
/*$sql= "INSERT INTO `tblhistovaca` (`HisCodigo`, `HisTipoAu`, `HisFechaInicio`, `HisFechaRegreso`, `HisFechaSolicitud`, `HisEstado`, `HisForUsuCed`, `HisDiasSolici`, `HisDocumen`) VALUES (NULL, '$TipoAusencia', '$fechaparti', '$fechasoli', '$finaly', 'Solicitado', NULL, '$miContador', 'subido')"; */
    
$resultados=$conexion->query($sql);
echo  "<br/>";
echo " Dias que hay entre fechas PERO sin fines de semana  ". $miContador;
    echo  "<br/>";
    
    echo  "<br/>";

    echo "<pre>";
    print_r($free);
    echo "</pre>";
    echo  "<br/>";
    echo  $contrato;
    echo  "<br/>";
    echo  "<br/>";
    echo  $finaly;
    echo  "<br/>";
    echo  "<br/>";


    echo "<pre>";
    print_r($vacaciones);
    echo "</pre>";
    echo  "<br/>";
    echo " Felicidades, ha pasado un año , puesto que han pasado ". $vacaciones[11]." días";
    echo  "<br/>";


    if ($vacaciones[11]="365") {

        echo "verdadero";
        
    }else {

        echo "falso";



    }



?>