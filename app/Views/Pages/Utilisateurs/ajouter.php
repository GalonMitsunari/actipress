<form method="post" name="formadd" action="<?php echo base_url('/pages/utilisateur/add'); ?>">

    <label>Id utilisateurs : </label>
    <input name="idUser" type="text"><br><br>
    <label>Nom de l'utlisateur : </label>
    <input name=nomUser" type="text"><br><br>
    <label>Prénom de l'utilisateur : </label>
    <input name="prenomUser" type="text"><br><br>
    <label>Numéro de tél pro </label>
    <input name="TelUser" type="text"><br><br>
    <label>adresse mail pro </label>
    <input name="mailUser" type="text"><br><br>
    <label>Droit </label>
    <input name="droitUser" type="text"><br><br>
    <label>pseudo </label>
    <input name="pseudoUser" type="text"><br><br>
    <label>password </label>
    <input name="passUser" type="text"><br><br>
    <label>hash </label>
    <input name="hashUser" type="text"><br>

    <button type ="submit">
        <img src="/img/valid.svg" class="ico" />&nbsp;Valider</button>

    <button type="button" onclick="location.href = '<?php echo base_url('/pages/fabricant/lister'); ?>'">
        <img src="/img/escape.svg" class="ico" />&nbsp;Retour</button>
</form>