<?php
session_start();
?>

<head>
    <link rel="stylesheet" href="./style/message.css">
</head>
<?php
if (isset($_SESSION['droits']) && $_SESSION['droits'] > 10) {
    echo "<Button><a href='/GestionUsers'> Gestion utilisateurs </a></Button>";
}

?>
<div class="container">
    <nav class="user">
        <?php
        if (isset($_SESSION['canSendTo'])) {
            foreach ($_SESSION['canSendTo'] as $rep) {
                if (!empty($rep)) {
                    echo "<a href='http://actipress.lan/sendTo/" . $rep . "'>" . $rep . "</a>";
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
        <h2>
            <?php
            echo $_SESSION['reciever'];
            ?>
        </h2>
        <div id="message">
            <?php

            foreach ($_SESSION['message'] as $key => $value) {
                foreach($value as $k => $v){
                    if($k != $_SESSION['id']){
                        echo "<div class='other'>
                        <p class='msg-sujet'>Sujet : ".$v["sujet"]."</p>
                        <p>"
                        .$v["content"].
                        "</p></div>";
                    }
                    else{
                        echo "<div class='me'>
                        <p class='msg-sujet'>Sujet : ".$v["sujet"]."</p>
                        <p>"
                        .$v["content"].
                        "</p></div>";
                    }
                }
            }

            ?>
        </div>
        <form id="send" action="sending" method='POST'>
            <input type="text" name="sujet" placeholder="Sujet..." class="input-sujet">
            <textarea name="content" cols="30" rows="10" placeholder="Message..."></textarea>
            <input type="submit" value="Envoyer">
        </form>
    </div>
</div>