<form method="post" name="frmVisu" action="<?php echo base_url('/pages/utilisateurs/visualiser'); ?>">
    <label>Id utilisateurs : </label>
    <input name="idUser" value="<?php echo $data['id_utilisateur']; ?>" readonly><br><br>
    <label>Nom de l'utlisateur : </label>
    <input name=nomUser" value="<?php echo $data['Nom']; ?>" size="60" readonly><br><br>
    <label>Prénom de l'utilisateur : </label>
    <input name="prenomUser" value="<?php echo $data['Prenom']; ?>" size="60" readonly><br><br>
    <label>Numéro de tél pro </label>
    <textarea name="TelUser" rows="6" readonly><?php echo $data['Numero_tel_pro']; ?></textarea><br><br>
    <label>adresse mail pro </label>
    <textarea name="mailUser" rows="6" readonly><?php echo $data['Adresse_mail_pro']; ?></textarea><br><br>
        <label>Droit </label>
    <textarea name="droitUser" rows="6" readonly><?php echo $data['Droit_utilisateur']; ?></textarea><br><br>
        <label>pseudo </label>
    <textarea name="pseudoUser" rows="6" readonly><?php echo $data['Pseudo']; ?></textarea><br><br>
        <label>password </label>
    <textarea name="passUser" rows="6" readonly><?php echo $data['password']; ?></textarea><br><br>
        <label>hash </label>
    <textarea name="hashUser" rows="6" readonly><?php echo $data['pass_hash']; ?></textarea><br>
</form>

<button type="button" onclick="location.href = '<?php echo base_url('/utilisateurs/lister'); ?>'">
    <img src="/img/escape.svg" class="ico" />&nbsp;Retour</button>