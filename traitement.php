
<?php
    if(isset($_POST["tester"]))
    {
        $nbr1=$_POST["nbr1"];
        $nbr2=$_POST["nbr2"];

        if($nbr1<$nbr2){
            echo '<font color="red" size = 20> le plus grand c\'est'.$nbr2.'</font>' ;
        }
        elseif($nbr1>$nbr2){
            echo  'le plus grand c\'est'.$nbr1;
        }

        else {
            echo '<font color="red"> bad answer</font>';
        }

    }


     if(isset($_POST["testerCarre"]))
    {
        $nbr1=$_POST["nbr1"];
            echo '<font color="red" size = 20> le carre c\'est '.$nbr1*$nbr1.'</font>' ;
    }

    if(isset($_POST["testerPerimetre"]))
    {
        $nbr1=$_POST["nbr1"];

        $resul = $nbr1 * 4;
        
        echo '<font color="red" size = 20> le carre c\'est '.$resul.'</font>' ;
    }

    if(isset($_POST["testerTraducteur"]))
    {
        $trad=$_POST["trad1"];

      switch($trad) 
{
        case 'lundi':
        echo 'Monday';
        break;
        case 'mardi':
        echo 'tuesday';
        break;
        case 'mercredi':
        echo 'wednesday';
        break;
        case 'jeudi':
        echo 'thursday';
        break;
        case 'vendredi':
        echo 'friday';
        break;
        case 'samedi':
        echo 'saturday';
        break;
        case 'dimanche':
        echo 'sunday';
        break;
            default:
            echo 'ousp!!!!! le jours inconnu ';  
}
        
       // echo '<font color="red" size = 20> le carre c\'est '.$resul.'</font>' ;
    }



      if(isset($_POST["testerSurafceTri"]))
    {
        $nbr1=$_POST["nbr1"];
        $nbr2=$_POST["nbr2"];

       $resula= ($nbr1*$nbr2)/2;
            echo '<font color="red" size = 20> la surface c\'est '.$resula.'</font>' ;
    }

    if(isset($_POST["testerPerimetreTri"]))
    {
        $nbr1=$_POST["nbr1"];
        $nbr2=$_POST["nbr2"];
        $nbr3=$_POST["nbr3"];

         $resula= $nbr1+$nbr2+$nbr3;
        
        echo '<font color="red" size = 20> le perimetre c\'est '.$resula.'</font>' ;
    }



    if(isset($_POST["testerRayon"]))
    {
        $nbr1=$_POST["nbr1"];

        $for = 2*3.14*$nbr1;
            echo '<font color="red" size = 20> la rayon c\'est '.$for.'</font>' ;
    }

     if(isset($_POST["testerRayonSurface"]))
    {
        $nbr1=$_POST["nbr1"];

        $for = 3.14*($nbr1*$nbr1);
            echo '<font color="red" size = 20> la rayon c\'est '.$for.'</font>' ;
    }




       if(isset($_POST["testerSurfaceLosange"]))
    {
        $nbr1=$_POST["nbr1"];
        $nbr2=$_POST["nbr2"];
        
        $resul =  ($nbr1* $nbr2)/2;
            echo '<font color="red" size = 20> le surafce c\'est '.$resul.'</font>' ;
    }

    if(isset($_POST["testerPerimetreLosange"]))
    {
        $nbr1=$_POST["nbr1"];

        $resul = $nbr1 * 4;
        
        echo '<font color="red" size = 20> le perimetre c\'est '.$resul.'</font>' ;
    }

     if(isset($_POST["testerCube"]))
    {
        $nbr1=$_POST["nbr1"];

        // $resul = $nbr1 * 6;


        $resul = sin($nbr1);
            echo '<font color="red" size = 20> le surfce c\'est '.$resul.'</font>' ;
    }
    if(isset($_POST["testerSin"]))
    {
        $nbr1=$_POST["nbr1"];

        


        $resul = sin($nbr1);
            echo '<font color="red" size = 20> le sinus c\'est '.$resul.'</font>' ;
    }
    if(isset($_POST["testerCos"]))
    {
        $nbr1=$_POST["nbr1"];

        $resul = cos($nbr1);
            echo '<font color="red" size = 20> le cosinus c\'est '.$resul.'</font>' ;
    }


    if(isset($_POST["francs"]))
    {
        $nbr1=$_POST["nbr1"];
        $nbr2=$_POST["nbr2"];
        $resul = $nbr1*$nbr2;
            echo '<font color="red" size = 20> le francs c\'est '.$resul.' fc </font>' ;
    }


      if(isset($_POST["dollard"]))
    {
        $nbr1=$_POST["nbr1"];
        $nbr2=$_POST["nbr2"];

        $resul = $nbr1/$nbr2;
            echo '<font color="red" size = 20> le dollard c\'est '.$resul.'$ </font>' ;
    }


     if(isset($_POST["salaire"]))
    {
        $nbr1=$_POST["nbr1"];
        $nbr2=$_POST["nbr2"];
        $nbr3=$_POST["nbr3"];

        $resul = ($nbr1+$nbr2)-$nbr3;
            echo '<font color="blue" size = 20> le salire de base est  c\'est '.$nbr1.' avantage est  c\'est '.$nbr2.' le avc  est  c\'est '.$nbr3.' dont le salaire  est  c\'est '.$resul.'$ </font>' ;
    }
 if(isset($_POST["addition"]))
    {
        $nbr1=$_POST["nbr1"];
        $nbr2=$_POST["nbr2"];
     

        $resul = ($nbr1+$nbr2);
            echo '<font color="blue" size = 20> la somme c\'est '.$resul.' </font>' ;
    }

    
?>