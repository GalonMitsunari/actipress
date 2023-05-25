<?php
    session_start();
    
?>
<link rel="stylesheet" href="./style/test.css">

<?php
    if(isset($_SESSION['droits']) && $_SESSION['droits'] > 100){
        echo "<Button> Gestion utilisateurs </Button>";
    }

?>