-- Infos utiles
-- Description : script SQL d'insertion de donnéees dans la base de données `actipress`
-- Date de création : 20/11/2022 à 11h57
-- Créé par : Louis Nichanian
-- Dernière modification : le 21/11/2022 à 13h30 par Louis Nichanian

-- Insertion d'enregistrements dans la table `droits`
INSERT INTO `droits`(`id_droit`, `Description`) VALUES
(100, 'Administrateur');

-- Insertion d'enregistrements dans la table `utilisateurs`
INSERT INTO `utilisateurs`(`Nom`, `Prenom`, `Numero_tel_pro`, `Adresse_mail_pro`, `Droits`, `Pseudo`, `Mdp_clair`, `Mdp_crypte`) VALUES
('Smaniotto', 'Logan', '123456789', 'loganpro@gmail.com', 100, 'mitsunari', 'C1m02P@ss', '$2y$10$tMzp.jc.fur4C.jDBbIYmuTNcDSFJ3xdV4saBhATGYt/gEqSus2Vi'),
('Lorenzati', 'Luca', '5233058520', 'lucapro@gmail.com', 100, 'Nemeiz', 'An@nke241)', '$2y$10$m9MP4OHFtAvbZ0cuTzLey.4lSWcZtwSj7AMMIHqbaL3cKfCHRUOwy'),
('Nichanian', 'Louis', '0649232126', 'louisnichanian@actipress.com', 100, 'l.nichanian', 'Pixou_du_82', '$2y$10$/tYE.XfCqyHz2Fr30aPuBukSqAZxw3i0t9mLFQRkjxGMrthUA1Dp2');