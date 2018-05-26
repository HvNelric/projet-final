<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('lb', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dëse Wäert sollt falsch sinn.',
    'This value should be true.' => 'Dëse Wäert sollt wouer sinn.',
    'This value should be of type {{ type }}.' => 'Dëse Wäert sollt vum Typ {{ type }} sinn.',
    'This value should be blank.' => 'Dëse Wäert sollt eidel sinn.',
    'The value you selected is not a valid choice.' => 'Dëse Wäert sollt enger vun de Wielméiglechkeeten entspriechen.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Et muss mindestens {{ limit }} Méiglechkeet ausgewielt ginn.|Et musse mindestens {{ limit }} Méiglechkeeten ausgewielt ginn.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Et dierf héchstens {{ limit }} Méiglechkeet ausgewielt ginn.|Et dierfen héchstens {{ limit }} Méiglechkeeten ausgewielt ginn.',
    'One or more of the given values is invalid.' => 'Een oder méi vun de Wäerter ass ongëlteg.',
    'The fields {{ fields }} were not expected.' => 'D\'Felder {{ fields }} goufen net erwaart.',
    'The fields {{ fields }} are missing.' => 'D\'Felder {{ fields }} feelen.',
    'This value is not a valid date.' => 'Dëse Wäert entsprécht kenger gëlteger Datumsangab.',
    'This value is not a valid datetime.' => 'Dëse Wäert entsprécht kenger gëlteger Datums- an Zäitangab.',
    'This value is not a valid email address.' => 'Dëse Wäert ass keng gëlteg Email-Adress.',
    'The file could not be found.' => 'De Fichier gouf net fonnt.',
    'The file is not readable.' => 'De Fichier ass net liesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'De Fichier ass ze grouss ({{ size }} {{ suffix }}). Déi zougeloosse Maximalgréisst bedréit {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Den Typ vum Fichier ass ongëlteg ({{ type }}). Erlaabten Type sinn {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dëse Wäert soll méi kleng oder gläich {{ limit }} sinn.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Dës Zeecheketten ass ze laang. Se sollt héchstens {{ limit }} Zeechen hunn.',
    'This value should be {{ limit }} or more.' => 'Dëse Wäert sollt méi grouss oder gläich {{ limit }} sinn.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Dës Zeecheketten ass ze kuerz. Se sollt mindestens {{ limit }} Zeechen hunn.',
    'This value should not be blank.' => 'Dëse Wäert sollt net eidel sinn.',
    'This value should not be null.' => 'Dëst sollt keen Null-Wäert sinn.',
    'This value should be null.' => 'Dëst sollt keen Null-Wäert sinn.',
    'This value is not valid.' => 'Dëse Wäert ass net gëlteg.',
    'This value is not a valid time.' => 'Dëse Wäert entsprécht kenger gëlteger Zäitangab.',
    'This value is not a valid URL.' => 'Dëse Wäert ass keng gëlteg URL.',
    'The two values should be equal.' => 'Béid Wäerter sollten identesch sinn.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'De fichier ass ze grouss. Déi maximal Gréisst dierf {{ limit }} {{ suffix }} net depasséieren.',
    'The file is too large.' => 'De Fichier ass ze grouss.',
    'The file could not be uploaded.' => 'De Fichier konnt net eropgeluede ginn.',
    'This value should be a valid number.' => 'Dëse Wäert sollt eng gëlteg Zuel sinn.',
    'This file is not a valid image.' => 'Dëse Fichier ass kee gëltegt Bild.',
    'This is not a valid IP address.' => 'Dëst ass keng gëlteg IP-Adress.',
    'This value is not a valid language.' => 'Dëse Wäert entsprécht kenger gëlteger Sprooch.',
    'This value is not a valid locale.' => 'Dëse Wäert entsprécht kengem gëltege Gebittsschema.',
    'This value is not a valid country.' => 'Dëse Wäert entsprécht kengem gëltege Land.',
    'This value is already used.' => 'Dëse Wäert gëtt scho benotzt.',
    'The size of the image could not be detected.' => 'D\'Gréisst vum Bild konnt net detektéiert ginn.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'D\'Breet vum Bild ass ze grouss ({{ width }}px). Déi erlaabte maximal Breet ass {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'D\'Breet vum Bild ass ze kleng ({{ width }}px). Déi minimal Breet ass {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'D\'Héicht vum Bild ass ze grouss ({{ height }}px). Déi erlaabte maximal Héicht ass {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'D\'Héicht vum Bild ass ze kleng ({{ height }}px). Déi minimal Héicht ass {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dëse Wäert sollt dem aktuelle Benotzerpasswuert entspriechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dëse Wäert sollt exakt {{ limit }} Buschtaf hunn.|Dëse Wäert sollt exakt {{ limit }} Buschtawen hunn.',
    'The file was only partially uploaded.' => 'De Fichier gouf just deelweis eropgelueden.',
    'No file was uploaded.' => 'Et gouf kee Fichier eropgelueden.',
    'No temporary folder was configured in php.ini.' => 'Et gouf keen temporären Dossier an der php.ini konfiguréiert oder den temporären Dossier existéiert net.',
    'Cannot write temporary file to disk.' => 'Den temporäre Fichier kann net gespäichert ginn.',
    'A PHP extension caused the upload to fail.' => 'Eng PHP-Erweiderung huet den Upload verhënnert.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Dës Sammlung sollt {{ limit }} oder méi Elementer hunn.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Dës Sammlung sollt {{ limit }} oder manner Elementer hunn.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Dës Sammlung sollt exakt {{ limit }} Element hunn.|Dës Sammlung sollt exakt {{ limit }} Elementer hunn.',
    'Invalid card number.' => 'Ongëlteg Kaartennummer.',
    'Unsupported card type or invalid card number.' => 'Net ënnerstëtzte Kaartentyp oder ongëlteg Kaartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dëst ass keng gëlteg IBAN-Kontonummer.',
    'This value is not a valid ISBN-10.' => 'Dëse Wäert ass keng gëlteg ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dëse Wäert ass keng gëlteg ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dëse Wäert ass weder eng gëlteg ISBN-10 nach eng gëlteg ISBN-13.',
    'This value is not a valid ISSN.' => 'Dëse Wäert ass keng gëlteg ISSN.',
    'This value is not a valid currency.' => 'Dëse Wäert ass keng gëlteg Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dëse Wäert sollt {{ compared_value }} sinn.',
    'This value should be greater than {{ compared_value }}.' => 'Dëse Wäert sollt méi grouss wéi {{ compared_value }} sinn.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dëse Wäert sollt méi grouss wéi oder gläich {{ compared_value }} sinn.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dëse Wäert sollt identesch si mat {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dëse Wäert sollt méi kleng wéi {{ compared_value }} sinn.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dëse Wäert sollt méi kleng wéi oder gläich {{ compared_value }} sinn.',
    'This value should not be equal to {{ compared_value }}.' => 'Dëse Wäert sollt net {{ compared_value }} sinn.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dëse Wäert sollt net identesch si mat {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'D\'Säiteverhältnis vum Bild ass ze grouss ({{ ratio }}). Den erlaabte Maximalwäert ass {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'D\'Säiteverhältnis vum Bild ass ze kleng ({{ ratio }}). Den erwaarte Minimalwäert ass {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'D\'Bild ass quadratesch ({{ width }}x{{ height }}px). Quadratesch Biller sinn net erlaabt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'D\'Bild ass am Queeschformat ({{ width }}x{{ height }}px). Biller am Queeschformat sinn net erlaabt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'D\'Bild ass am Héichformat ({{ width }}x{{ height }}px). Biller am Héichformat sinn net erlaabt.',
    'An empty file is not allowed.' => 'En eidele Fichier ass net erlaabt.',
    'The host could not be resolved.' => 'Den Host-Numm konnt net opgeléist ginn.',
    'This value does not match the expected {{ charset }} charset.' => 'Dëse Wäert entsprécht net dem erwaarten Zeechesaz {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dëst ass kee gëltege "Business Identifier Code" (BIC).',
    'Error' => 'Feeler',
    'This form should not contain extra fields.' => 'Dës Feldergrupp sollt keng zousätzlech Felder enthalen.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'De geschécktene Fichier ass ze grouss. Versicht wann ech gelift ee méi klenge Fichier eropzelueden.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Den CSRF-Token ass ongëlteg. Versicht wann ech gelift de Formulaire nach eng Kéier ze schécken.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Bei der Authentifikatioun ass e Feeler opgetrueden.',
    'Authentication credentials could not be found.' => 'Et konnte keng Zouganksdate fonnt ginn.',
    'Authentication request could not be processed due to a system problem.' => 'D\'Ufro fir eng Authentifikatioun konnt wéinst engem Problem vum System net beaarbecht ginn.',
    'Invalid credentials.' => 'Ongëlteg Zouganksdaten.',
    'Cookie has already been used by someone else.' => 'De Cookie gouf scho vun engem anere benotzt.',
    'Not privileged to request the resource.' => 'Keng Rechter fir d\'Ressource unzefroen.',
    'Invalid CSRF token.' => 'Ongëltegen CSRF-Token.',
    'No authentication provider found to support the authentication token.' => 'Et gouf keen Authentifizéierungs-Provider fonnt deen den Authentifizéierungs-Token ënnerstëtzt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keng Sëtzung disponibel. Entweder ass se ofgelaf oder Cookies sinn net aktivéiert.',
    'No token could be found.' => 'Et konnt keen Token fonnt ginn.',
    'Username could not be found.' => 'De Benotzernumm konnt net fonnt ginn.',
    'Account has expired.' => 'Den Account ass ofgelaf.',
    'Credentials have expired.' => 'D\'Zouganksdate sinn ofgelaf.',
    'Account is disabled.' => 'De Konto ass deaktivéiert.',
    'Account is locked.' => 'De Konto ass gespaart.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;