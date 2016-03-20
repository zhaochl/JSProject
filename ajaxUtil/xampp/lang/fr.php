<?
// ---------------------------------------------------------------------
// GLOBAL
// ---------------------------------------------------------------------

$TEXT['global-xampp']="XAMPP pour Linux";

// ---------------------------------------------------------------------
// NAVIGATION
// ---------------------------------------------------------------------

$TEXT['navi-xampp']="XAMPP";
$TEXT['navi-welcome']="Bienvenue";
$TEXT['navi-status']="Statut";
$TEXT['navi-security']="Sécurité";
$TEXT['navi-doc']="Documentation";
$TEXT['navi-components']="Composants";
$TEXT['navi-about']="A propos de XAMPP";

$TEXT['navi-demos']="Démos";
$TEXT['navi-cdcol']="Collection de CD";
$TEXT['navi-bio']="Biorhythme";
$TEXT['navi-guest']="Guest Book";
$TEXT['navi-perlenv']="MiniPerl";
$TEXT['navi-iart']="Instant Art";
$TEXT['navi-iart2']="Flash Art";
$TEXT['navi-phonebook']="Répertoire<br>Téléphonique";
$TEXT['navi-perlasp']="Perl:ASP";
$TEXT['navi-pear']="PEAR:Excel_Writer";
$TEXT['navi-adodb']="ADOdb";
$TEXT['navi-perl']="Module Perl";
$TEXT['navi-sms']="SMS Api";

$TEXT['navi-tools']="Outils";
$TEXT['navi-phpmyadmin']="phpMyAdmin";
$TEXT['navi-phpsqliteadmin']="phpSQLiteAdmin";
$TEXT['navi-webalizer']="Webalizer";
$TEXT['navi-mercury']="Mercury Mail";
$TEXT['navi-filezilla']="FileZilla FTP";
$TEXT['navi-jpgraph']="JpGraph";

$TEXT['navi-languages']="Langues";

// ---------------------------------------------------------------------
// STATUS
// ---------------------------------------------------------------------

$TEXT['status-head']="Statut XAMPP";
$TEXT['status-text1']="Cette page recueille l'ensemble des informations sur ce qui marche et qui est lancé et ce qui ne l'est pas.";
$TEXT['status-text2']="Certains changements dans la configuration peuvent causer de faux rapports de statuts erronés. Avec SSL (https://localhost) tous ces rapports de fonctionnent pas!";

$TEXT['status-mysql']="Base de Données MySQL";
$TEXT['status-php']="PHP";
$TEXT['status-perl']="Perl avec mod_perl";
$TEXT['status-cgi']="Common Gateway Interface (CGI)";
$TEXT['status-ssi']="Server Side Includes (SSI)";
$TEXT['status-mmcache']="PHP extension \"eAccelerator\"";
$TEXT['status-mmcache-url']="http://www.apachefriends.org/faq-lampp-en.html#mmcache";
$TEXT['status-smtp']="Serveur SMTP";
$TEXT['status-ftp']="Serveur FTP";
$TEXT['status-oci8']="PHP extension \"OCI8/Oracle\"";
$TEXT['status-oci8-url']="http://www.apachefriends.org/faq-lampp-en.html#oci8";

$TEXT['status-lookfaq']="voir FAQ";
$TEXT['status-ok']="ACTIVE";
$TEXT['status-nok']="DESACTIVE";

$TEXT['status-tab1']="Composant";
$TEXT['status-tab2']="Statut";
$TEXT['status-tab3']="Conseil";

// ---------------------------------------------------------------------
// SECURITY
// ---------------------------------------------------------------------

$TEXT['security-head']="Securité XAMPP";
$TEXT['security-text1']="Cette page vous donne un bref aperçu du statut de securité de votre installation de XAMPP. (Veuillez lire la suite après le tableau.)";
$TEXT['security-text2']="Les points marqués en verts sont securisés; les points marqués en rouge sont définitivement insécurisés et les points marqués en jaune n'ont pas pu être vérifiés (ex: parce que le logiciel de vérification n'est pas lancé).<p>Pour réparer ou fermer tous ces objets appelez simplement <p><b>/opt/lampp/lampp security</b><p>Ceci démarrera un programme intéractif.";

$TEXT['security-ok']="SECURISE";
$TEXT['security-nok']="INSECURISE";
$TEXT['security-noidea']="INCONNU";

$TEXT['security-tab1']="Sujet";
$TEXT['security-tab2']="Statut";

$TEXT['security-checkapache-nok']="Ces pages XAMPP sont accessibles par le réseau pour tout le monde";
$TEXT['security-checkapache-ok']="Ces pages XAMPP ne sont plus accessibles par le réseau pour tout le monde";
$TEXT['security-checkapache-text']="Toutes les pages de démo de XAMPP que vous regardez maintenant sont accessibles par le réseau pour tout le monde. Tous ceux qui connaissent votre adresse IP peuvent voir ces pages.";

$TEXT['security-checkmysqlport-nok']="MySQL est accessible par le réseau";
$TEXT['security-checkmysqlport-ok']="MySQL n'est plus accessible par le réseau";
$TEXT['security-checkmysqlport-text']="Ceci est une faille de sécurité potentielle ou tout au moins théorique. Si vous etes un parano de la sécurité vous devriez désactiver l'interface réseau de MySQL.";

$TEXT['security-checkpmamysqluser-nok']="L'utilisateur pma de phpMyAdmin n'a pas de mot de passe";
$TEXT['security-checkpmamysqluser-ok']="L'utilisateur pma de phpMyAdmin a désormais un mot de passe";
$TEXT['security-checkpmamysqluser-text']="phpMyAdmin sauvegarde vos préférences dans une autre base de données MySQL. Pour accéder à ces données phpMyAdmin utilise un user spécial pma. Cet utilisateur n'a pas de mot de passe par défaut et pour éviter tout problème de sécurité, vous devriez lui en affecter un.";

$TEXT['security-checkmysql-nok']="L'utilisateur root de MySQL n'a pas de mot de passe";
$TEXT['security-checkmysql-ok']="L'utilisateur root de MySQL a désormais un mot de passe";
$TEXT['security-checkmysql-text']="Tout utilisateur local sur une machine Linux peut acceder a votre base de donnees MySQL avec les droits administrateur. Vous devriez mettre un mot de passe.";

$TEXT['security-checkftppassword-nok']="Le mot de passe pour l'utilisateur FTP nobody est toujours 'lampp'";
$TEXT['security-checkftppassword-ok']="Le mot de passe pour l'utilisateur FTP nobody n'est plus 'lampp'";
$TEXT['security-checkftppassword-text']="En utilisant le mot de passe par défaut pour l'utilisateur FTP 'nobody', tout le monde peut uploader et changer des fichiers de votre serveur XAMPP.";

// ---------------------------------------------------------------------
// START
// ---------------------------------------------------------------------

$TEXT['start-head']="Bienvenue dans XAMPP pour Linux";

$TEXT['start-subhead']="Bravo:<br>Vous venez d'installer XAMPP avec succès!";

$TEXT['start-text1']="Vous pouvez dès lors commencer à utiliser Apache and Co. Vous devriez avant tout essayer \"Statut\" dans le menu de navigation pour s'assurer que tout fonctionne bien.";

$TEXT['start-text2']="Après les tests, vous pouvez aller voir les exemples situés sous les liens de test.";

$TEXT['start-text3']="Avant de commencer à programmer en PHP ou en Perl (ou autre ;),  allez voir le fichier <a href=http://www.apachefriends.org/lampp-en.html>XAMPP lisez-moi</a> pour avoir plus d'informations sur votre installation XAMPP.";

$TEXT['start-text4']="Pour le support OpenSSL, veuillez utiliser le certificat de test avec <a href='https://127.0.0.1' target='_top'>https://127.0.0.1</a> ou <a href='https://localhost' target='_top'>https://localhost</a>";

$TEXT['start-text5']="";

$TEXT['start-text6']="Bonne chance,<br>Kai \"Oswald\" Seidler + Kay Vogelgesang";

// ---------------------------------------------------------------------
// MANUALS
// ---------------------------------------------------------------------

$TEXT['manuals-head']="Documentation en ligne";

$TEXT['manuals-text1']="XAMPP regroupe beaucoup de logiciels différents dans un seul paquet. Voici une liste de documentation standard et de référence des paquetages les plus importants.";


$TEXT['manuals-list1']="
<ul>
<li><a href=http://httpd.apache.org/docs-2.0/>Documentation Apache 2</a>
<li><a href=http://www.php.net/manual/en/>Documentation de <b>référence </b>PHP</a>
<li><a href=http://www.perldoc.com/perl5.8.0/pod/perl.html>Documentation Perl </a>
<li><a href=http://www.mysql.com/documentation/mysql/bychapter/>Documentation MySQL</a>
<li><a href=http://www.ros.co.nz/pdf/readme.pdf>Documentation class pdf </a>
</ul>";

$TEXT['manuals-text2']="Et une petite liste de tutoriaux et la page de documentation d'Apache Friends:";

$TEXT['manuals-list2']="
<ul>
<li><a href=http://www.apachefriends.org/faq-en.html>Documentation Apache Friends </a>
<li><a href=http://www.freewebmasterhelp.com/tutorials/php> Tutoriel PHP </a> by David Gowans
<li><a href=http://www.davesite.com/webstation/html/>HTML - Un Tutoriel Interactif pour Débutants</a> by Dave Kristula
<li><a href=http://www.comp.leeds.ac.uk/Perl/start.html> Tutoriel Perl </a> by Nik Silver
</ul>";

$TEXT['manuals-text3']="Bonne Chance et Amusez vous bien! :)";

// ---------------------------------------------------------------------
// COMPONENTS
// ---------------------------------------------------------------------

$TEXT['components-head']="Composants XAMPP";

$TEXT['components-text1']=" XAMPP regroupe beaucoup de logiciels différents dans un seul paquet. Voici un aperçu de tous les paquetages.";

$TEXT['components-text2']="Un grand merci aux développeurs de ces programmes.";

$TEXT['components-text3']="Dans le répertoire <b>/opt/lampp/licenses</b> vous trouverez toutes les licences de ces programmes.";

// ---------------------------------------------------------------------
// CD COLLECTION DEMO
// ---------------------------------------------------------------------

$TEXT['cds-head']="CD Collection (Exemple pour les classes PHP+MySQL+PDF class)";
$TEXT['cds-head-fpdf']="CD Collection (Exemple pour les classes PHP+MySQL+FPDF)";

$TEXT['cds-text1']="Un programme de CD très simple.";

$TEXT['cds-text2']="Liste de CD en temps que document <a href='$PHP_SELF?action=getpdf'>PDF</a>.";

$TEXT['cds-error']="Impossible d'accéder à la base de données!<br>Est-ce que MySQL est lancé, ou avez vous changé le mot de passe?";
$TEXT['cds-head1']="Mes CDs";
$TEXT['cds-attrib1']="Artiste";
$TEXT['cds-attrib2']="Titre";
$TEXT['cds-attrib3']="Année";
$TEXT['cds-attrib4']="Commande";
$TEXT['cds-sure']="Sur?";
$TEXT['cds-head2']="Ajouter CD";
$TEXT['cds-button1']="SUPPRIMER CD";
$TEXT['cds-button2']="AJOUTER CD";

// ---------------------------------------------------------------------
// BIORHYTHM DEMO
// ---------------------------------------------------------------------

$TEXT['bio-head']="Biorythme (Exemple pour PHP+GD)";

$TEXT['bio-by']="par";
$TEXT['bio-ask']="Veuillez entrer votre date de naissance";
$TEXT['bio-ok']="OK";
$TEXT['bio-error1']="Date";
$TEXT['bio-error2']="est invalide";

$TEXT['bio-birthday']="Date de Naissance";
$TEXT['bio-today']="Aujourd'hui";
$TEXT['bio-intellectual']="Intellectuel";
$TEXT['bio-emotional']="Emotionnel";
$TEXT['bio-physical']="Physique";

// ---------------------------------------------------------------------
// INSTANT ART DEMO
// ---------------------------------------------------------------------

$TEXT['iart-head']="Instant Art (Exemple pour PHP+GD+FreeType)";
$TEXT['iart-text1']="Police \"AnkeCalligraph\" par <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['iart-ok']="OK";

// ---------------------------------------------------------------------
// FLASH ART DEMO
// ---------------------------------------------------------------------

$TEXT['flash-head']="Flash Art (Exemple for PHP+MING)";
$TEXT['flash-text1']="Police \"AnkeCalligraph\" par <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['flash-ok']="OK";

// ---------------------------------------------------------------------
// PHONE BOOK DEMO
// ---------------------------------------------------------------------

$TEXT['phonebook-head']="Répertoire Téléphonique (Exemple pour PHP+SQLite)";

$TEXT['phonebook-text1']="Un script très simple de répertoire téléphonique, mais implémenté avec une technologie moderne et récente: SQLite, la base de données SQL sans serveur.";

$TEXT['phonebook-error']="Impossible d'ouvrir la base de données!";
$TEXT['phonebook-head1']="Mes Numéros";
$TEXT['phonebook-attrib1']="Nom";
$TEXT['phonebook-attrib2']="Prénom";
$TEXT['phonebook-attrib3']="Numéro";
$TEXT['phonebook-attrib4']="Command";
$TEXT['phonebook-sure']="Sur?";
$TEXT['phonebook-head2']="Ajouter Entrée";
$TEXT['phonebook-button1']="SUPPRIMER";
$TEXT['phonebook-button2']="AJOUTER";

// ---------------------------------------------------------------------
// ABOUT
// ---------------------------------------------------------------------

$TEXT['about-head']="A Propos d'XAMPP";

$TEXT['about-subhead1']="Idée et Réalisation";

$TEXT['about-subhead2']="Design";

$TEXT['about-subhead3']="Collaboration";

$TEXT['about-subhead4']="Contacts";

// ---------------------------------------------------------------------
// CODE
// ---------------------------------------------------------------------

$TEXT['srccode-in']="Obtenir les sources ici";

// ---------------------------------------------------------------------
// MERCURY
// ---------------------------------------------------------------------

$TEXT['mail-head']="Mailing avec le serveur Mercury Mail SMTP et POP3";
$TEXT['mail-hinweise']="Notes importantes sur l'utilisation de Mercury!";
$TEXT['mail-adress']="Expéditeur:";
$TEXT['mail-adressat']="Destinataire:";
$TEXT['mail-cc']="CC:";
$TEXT['mail-subject']="Sujet:";
$TEXT['mail-message']="Message:";
$TEXT['mail-sendnow']="Envoi du message en cours...";
$TEXT['mail-sendok']="Le message a été envoyé avec succès!";
$TEXT['mail-sendnotok']="Erreur! L'envoi du message a échoué!";
$TEXT['mail-help1']="Notes pour l'utilisation de Mercury:<br><br>";
$TEXT['mail-help2']="<UL>
<LI>Mercury requiert une connexion externe au démarrage;</LI>
<LI>au démarrage, Mercury défini le Service des Noms de Domaine (DNS) automatiquement en lui affectant le serveur de nom de votre provider;</LI>
<LI>Pour les utilisateurs de serveurs Gateway: Veuillez spécifier votre DNS via TCP/IP;</LI>
<LI>Le fichier de configuration de Mercury s'appelle MERCURY.INI;</LI>
<LI>Pour tester, veuillez envoyer un message à postmaster@localhost ou admin@localhost et verifiez l'existance de ces messages dans les repertoires suivants : xampp.../mailserver/MAIL/postmaster ou (...)/admin;</LI>
<LI>un utilisateur test nommé \"newuser\" (newuser@localhost) avec le mot de passe = wampp;</LI>
<LI>le spam et autres obscénités sont strictement interdits avec Mercury!;</LI> 
</UL>";
$TEXT['mail-url']="<a href=\"http://www.pmail.com/overviews/ovw_mercury.htm\" target=\"_top\">http://www.pmail.com/overviews/ovw_mercury.htm</a>";
// ---------------------------------------------------------------------
// FileZilla FTP 
// ---------------------------------------------------------------------

$TEXT['filezilla-head']="Serveur FTP FileZilla";
$TEXT['filezilla-install']="Apache <U>n'est pas</U> un Serveur FTP... mais FileZilla FTP en est un. Veuillez considérer les références suivantes.";
$TEXT['filezilla-install2']="Dans le répertoire principal de xampp, lancez \"filezilla_setup.bat\" pour le setup. Attention: Pour Windows NT, 2000 et XP Professionnel, FileZilla a besoin d'être installé en temps que service.";
$TEXT['filezilla-install3']="Configurer \"FileZilla FTP\". Pour cela, veuillez utiliser l'interface FileZilla \"FileZilla Server Interface.exe\". Deux utilisateurs sont dans cet exemple:<br><br>
A: Un utilisateur par défaut \"newuser\", password \"wampp\". Le répertoire racine est xampp\htdocs.<br> 
B: Un utilisateur anonymous \"anonymous\", pas de password. Le répertoire racine est xampp\anonymous.<br><br>
L'adresse par defaut est l'adresse de loopback 127.0.0.1.";
$TEXT['filezilla-install4']="Le serveur FTP s'arrête avec \"FileZillaFTP_stop.bat\". Pour le service FileZilla FTP, veuillez utiliser \"FileZillaServer.exe\". Apres, vous pouvez configurer les options de démarrage.";
$TEXT['filezilla-url']="<br><br><a href=\"http://filezilla.sourceforge.net\" target=\"_top\">http://filezilla.sourceforge.net</a>";

// ---------------------------------------------------------------------
// PEAR
// ---------------------------------------------------------------------

$TEXT['pear-head']="Export Excel avec PEAR (PHP)";
$TEXT['pear-text']="Un petit <a class=blue target=extern href=\"http://www.contentmanager.de/magazin/artikel_310-print_excel_export_mit_pear.html\">Manuel</A> de Björn Schotte sur <a class=blue target=extern href=\"http://www.thinkphp.de/\">ThinkPHP</A> (Allemand uniquement)";
$TEXT['pear-cell']="La valeur d'une cellule";

// ---------------------------------------------------------------------
// JPGRAPH
// ---------------------------------------------------------------------

$TEXT['jpgraph-head']="JpGraph - Librairie graphique pour PHP";
$TEXT['jpgraph-url']="<br><br><a href=\"http://www.aditus.nu/jpgraph/\" target=\"_top\">http://www.aditus.nu/jpgraph/</a>";

// ---------------------------------------------------------------------
// ADODB
// ---------------------------------------------------------------------

$TEXT['ADOdb-head']="ADOdb - Un autre accès BD (PHP)";
$TEXT['ADOdb-text']="ADOdb signifie Active Data Objects Data Base. Nous supportons actuellement MySQL, PostgreSQL, Interbase, Firebird, Informix, Oracle, MS SQL 7, Foxpro, Access, ADO, Sybase, FrontBase, DB2, SAP DB, SQLite et generic ODBC. Les drivers Sybase, Informix, FrontBase et PostgreSQL sont de contributions communautaires. Vous les trouverez ici \(mini)xampp\php\pear\adodb.";
$TEXT['ADOdb-example']="L'exemple:";
$TEXT['ADOdb-dbserver']="Serveur Base de Données (MySQL, Oracle ..?)";
$TEXT['ADOdb-host']="Hôte dur serveur BD (nom ou IP)";
$TEXT['ADOdb-user']="Username ";
$TEXT['ADOdb-password']="Password";
$TEXT['ADOdb-database']="Base de Données actuelle sur ce serveur";
$TEXT['ADOdb-table']="Table sélectionnée de la base";
$TEXT['ADOdb-nottable']="<p><B>Table introuvable!</B>";
$TEXT['ADOdb-notdbserver']="<p><B>Le driver pour ce serveur de Base de Données n'existe pas ou peut-être qu'il s'agit du driver ODBC, ADO or OLEDB!</B>";

?>
