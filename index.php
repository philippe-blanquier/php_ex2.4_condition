<!DOCTYPE html>
<html lang="fr">
	<head>
        <title>PHP ex2.3 condition</title>
    </head>
    <body >
        <?php
        $magnitude=2;
        switch ($magnitude)
        {
            case 1: $msg="Micro-séisme impossible à ressentir."; break;
            case 2: $msg="Micro-séisme impossible à ressentir mais enregistrable par les sismomètres."; break;
            case 3: $msg="Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti."; break;      
            case 4: $msg="Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats."; break;     
            case 5: $msg="Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes."; break;    
            case 6: $msg="Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre."; break;     
            case 7: $msg="Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance."; break;    
            case 8: $msg="Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres."; break;   
            case 9: $msg="Séisme capable de tout détruire sur une très vaste zone."; break;        
            default: $msg="valeur no prévue."; break;           
        }
        echo ("VSur l'échelle de Richter; ".$magnitude." --> ".$msg)
       ?>
    </body>
</html>