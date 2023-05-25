<?php
    session_start();
    
?>
<link rel="stylesheet" href="./style/test.css">

<?php
    if(isset($_SESSION['droits']) && $_SESSION['droits'] > 10){
        echo "<button><a href='/GestionUsers'> Gestion utilisateurs <a></Button>";
    }

?>
<div class="container">
        <nav class="user">
            <?php
                if(isset($_SESSION['canSendTo'])){
                    foreach($_SESSION['canSendTo'] as $rep){
                        if(!empty($rep)){
                            echo "<a href='http://actipress.lan/sendTo/".$rep."'>" . $rep . "</a>";
                            
                        }
                    }
                }

            ?>
            <!-- <h3>Nicolas Daunac</h3>
            <h3>Logan Smaniotto</h3>
            <h3>Luca Lorenzati</h3>
            <h3>Louis Nichanian</h3> -->
        </nav>
        <div class="contain">
            <h2>Actualité du jour</h2>
            <div class="img">
                <img src="./img/mk-ultra-project.webp" alt="none">
            </div>
            <h1>Le Projet MKULTRA</h1>
            <p style="text-align: center;width: 25vw;margin-left: auto;margin-right:auto">Les documents de la CIA suggèrent que l'agence a pensé à utiliser des radiations dans le cadre du projet. La plupart des expériences ont consisté en l'utilisation de psychotropes, particulièrement le LSD. Les expériences se sont déroulées sur des employés de la CIA, du personnel militaire, d'autres agents du gouvernement, des prostituées, des personnes affligées de pathologies mentales et des membres du public, généralement sans l'assentiment du sujet.</p>
        </div>
    </div>