-- Infos utiles
-- Description : script SQL de création des tables de la base de données `actipress`
-- Date de création : 21/09/2022
-- Créé par : Louis Nichanian
-- Dernière modification : le 20/11/2022 à 15h19 par Louis Nichanian

#+----------------------------------------------------------------------------------------------------------------------+
#|																												        |
#|                                                  SCHÉMA RELATIONNEL                                                  |
#|																												        |
#+----------------------------------------------------------------------------------------------------------------------+
#|		DROITS(id_droit, description)																					|
#|		id_droit : clé primaire 																						|
#| 																														|
#| 																														|
#|		UTILISATEURS(id_utilisateur, nom, prenom, numero_tel_pro, adresse_mail_pro, droits, pseudo, mot_de_passe)		|
#|		id_utilisateur : clé primaire 																					|
#|		droits : clé étrangère en référence à id_droit de DROITS                                                        |
#|																														|
#|																														|
#|		MESSAGE(id_message, message_parent, objet, corps, emetteur, date_envoi, 										|
#|		localisation_emetteur, date_reponse, date_suppression)															|
#|		id_message : clé primaires																						|
#|		emetteur : clé étrangère en référence à id_utilisateur de UTILISATEURS											|
#|																														|
#|																														|
#|		PIECES_JOINTES(id_pj, id_message, lien_stockage)																|
#|		id_pj : clé primaires																							|
#|		id_message : clé étrangère en référence à id_message de MESSAGE 												|
#|																														|
#|																														|
#|		RECEPTION(id_message, destinataire) 																			|
#|		destinataire, id_message : clés primaires 																		|
#|		id_message : clé étrangère en référence à id_message de MESSAGE 												| 																		|
#|		destinataire : clé étrangère en référence à id_utilisateur de UTILISATEURS 										|
#+----------------------------------------------------------------------------------------------------------------------+

#+----------------------------------------------------------------------------------------------------------+
#|																					   					    |
#|                                           CRÉATION DES TABLES                                            |
#|																									 		|
#+----------------------------------------------------------------------------------------------------------+
#																											|
#																											|
#+---------------------------------------------------------------------------------------------------+		|
#|                                 Création de la table DROITS                                       |		|
#+---------------------------------------------------------------------------------------------------+		|
CREATE TABLE IF NOT EXISTS `DROITS` 																#|		|
( 																									#|		|
	`id_droit` INT(5) NOT NULL, 																	#|		|
	`Description` VARCHAR(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 					#|		|
																									#|		|
	PRIMARY KEY(`id_droit`) 																		#|		|
)ENGINE=InnoDB; 																					#|		|
#+---------------------------------------------------------------------------------------------------+		|
#																											|
#																											|
#+---------------------------------------------------------------------------------------------------+		|
#|                                 Création de la table UTILISATEURS                                 |		|
#+---------------------------------------------------------------------------------------------------+		|
CREATE TABLE IF NOT EXISTS `utilisateurs` 															#|		|
( 																									#|		|
	`id_utilisateur` INT(5) NOT NULL AUTO_INCREMENT, 												#|		|
	`Nom` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 							#|		|
	`Prenom` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 						#|		|
	`Numero_tel_pro` CHAR(10), 																		#|		|
	`Adresse_mail_pro` VARCHAR(135) CHARACTER SET utf8 COLLATE utf8_general_ci, 					#|		|
	`Droits` INT(5), 																	#|		|
	`Pseudo` VARCHAR(55) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL, 						#|		|
    `Mdp_clair` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL 					#|		|
    COMMENT 'Mot de passe non chiffré', 															#|		|
    `Mdp_crypte` VARCHAR(255) NOT NULL COMMENT 'Mot de passe chiffré',								#|		|
	 																								#|		|
	PRIMARY KEY(`id_utilisateur`), 																	#|		|
	FOREIGN KEY `Fk_droits` (`droits`) REFERENCES droits(`id_droit`)
)ENGINE=InnoDB; 																					#|		|
#+---------------------------------------------------------------------------------------------------+		|
#																											|
#																											|
#+---------------------------------------------------------------------------------------------------+		|
#|                                   Création de la table MESSAGE                                    |		|
#+---------------------------------------------------------------------------------------------------+		|
CREATE TABLE IF NOT EXISTS `message` 																#|		|
( 																									#|		|
	`id_message` INT(10) NOT NULL AUTO_INCREMENT, 													#|		|
	`idEmetteur` INT(10), 
    `idDestinataire` INT(10),	
    `sujet` varchar(127) not null default "";
	`contenue` varchar(10000) not null, 																				#|		|							#|		|
	`dateEnvoie` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 			#|		|
	`Localisation` VARCHAR(40) NOT NULL default "0.000;0.000", 													#|		|												#|		|
	`Date_suppression` TIMESTAMP NULL DEFAULT NULL, 												#|		|
																									#|		|
	PRIMARY KEY(`id_message`), 																		#|		|
	FOREIGN KEY (`idEmetteur`) REFERENCES utilisateurs(`id_utilisateur`),
    FOREIGN KEY (`idDestinataire`) REFERENCES utilisateurs(`id_utilisateur`)
)ENGINE=InnoDB; 																					#|		|
																					#|		|
#+---------------------------------------------------------------------------------------------------+		|
#																											|
#																											|
#+----------------------------------------------------------------------------------------------------------+
