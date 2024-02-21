
    <?php 
    session_start();

    $valorVoto = $_POST['time'];
    
    switch ($valorVoto) {

        case "flamengo":

             if (!isset($_SESSION['Flamengo'])) {
                $_SESSION['Flamengo'] = 1;   
             } else {
                $_SESSION['Flamengo']++;
                print_r("Voto contabilizado para o Flamengo, atualmente temos: " . $_SESSION['Flamengo']);
             }

        break;
        
        case "vasco":            
            
            if (!isset($_SESSION['vasco'])) {
               $_SESSION['vasco'] = 1;
            } else {
               $_SESSION['vasco']++;
               print_r("Voto contabilizado para o vasco, atualmente temos: " . $_SESSION['vasco']);
            }

        break;
        
        case "botafogo":     

            if (!isset($_SESSION['botafogo'])) {
               $_SESSION['botafogo'] = 1;
            } else {
               $_SESSION['botafogo']++;
               print_r("Voto contabilizado para o botafogo, atualmente temos: " . $_SESSION['botafogo']);
            }

        break;
        
        case "botafogo":   

            if (!isset($_SESSION['botafogo'])) {
               $_SESSION['botafogo'] = 1;
            } else {
               $_SESSION['botafogo']++;
               print_r("Voto contabilizado para o botafogo, atualmente temos: " . $_SESSION['botafogo']);
            }
        break;
        
        case "saopaulo":
            
            if (!isset($_SESSION['saopaulo'])) {
                $_SESSION['saopaulo'] = 1;
             } else {
                $_SESSION['saopaulo']++;
                print_r("Voto contabilizado para o São Paulo, atualmente temos: " . $_SESSION['saopaulo']);
             }

        break;
        
        
        case "palmeiras":   

            if (!isset($_SESSION['palmeiras'])) {
               $_SESSION['palmeiras'] = 1;
            } else {
               $_SESSION['palmeiras']++;
               print_r("Voto contabilizado para o palmeiras, atualmente temos: " . $_SESSION['palmeiras']);
            }
        break;
        
        case "corinthians":     

            if (!isset($_SESSION['corinthians'])) {
               $_SESSION['corinthians'] = 1;
            } else {
               $_SESSION['corinthians']++;
               print_r("Voto contabilizado para o corinthians, atualmente temos: " . $_SESSION['corinthians']);
            }
        break;
        
        case "santos":        

            if (!isset($_SESSION['santos'])) {
               $_SESSION['santos'] = 1;
            } else {
               $_SESSION['santos']++;
               print_r("Voto contabilizado para o santos, atualmente temos: " . $_SESSION['santos']);
            }
        break;
    }
?>
    
</body>
</html>