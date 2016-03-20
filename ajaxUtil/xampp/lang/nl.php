<?
// ---------------------------------------------------------------------
// GLOBAL
// ---------------------------------------------------------------------

$TEXT['global-xampp']="XAMPP voor Linux";
$TEXT['global-showcode']="Toon bron code";
$TEXT['global-sourcecode']="Bron code";

// ---------------------------------------------------------------------
// NAVIGATION
// ---------------------------------------------------------------------

$TEXT['navi-xampp']="XAMPP";
$TEXT['navi-welcome']="Welkom";
$TEXT['navi-status']="Status";
$TEXT['navi-security']="Beveiliging";
$TEXT['navi-doc']="Documentatie";
$TEXT['navi-components']="Componenten";
$TEXT['navi-about']="Over XAMPP";

$TEXT['navi-demos']="Demos";
$TEXT['navi-cdcol']="CD Collectie";
$TEXT['navi-bio']="Bioritme";
$TEXT['navi-guest']="Gasten Boek";
$TEXT['navi-iart']="Instant Art";
$TEXT['navi-iart2']="Flash Art";
$TEXT['navi-phonebook']="Telefoon Boek";

$TEXT['navi-tools']="Tools";
$TEXT['navi-phpmyadmin']="phpMyAdmin";
$TEXT['navi-webalizer']="webalizer";
$TEXT['navi-phpsqliteadmin']="phpSQLiteAdmin";

$TEXT['navi-languages']="Talen";

// ---------------------------------------------------------------------
// STATUS
// ---------------------------------------------------------------------

$TEXT['status-head']="XAMPP Status";
$TEXT['status-text1']="Deze bladzijde toont in een oogopslag alle informatie over wat draait en werkt en wat niet.";
$TEXT['status-text2']="Sommige veranderingen in de configuratie veroorzaken soms foutieve status meldingen.";

$TEXT['status-mysql']="MySQL database";
$TEXT['status-php']="PHP";
$TEXT['status-perl']="Perl";
$TEXT['status-cgi']="Common Gateway Interface (CGI)";
$TEXT['status-ssi']="Server Side Includes (SSI)";
$TEXT['status-mmcache']="PHP extension »eAccelerator«";
$TEXT['status-mmcache-url']="http://www.apachefriends.org/faq-lampp-en.html#mmcache";
$TEXT['status-oci8']="PHP extension »OCI8/Oracle«";
$TEXT['status-oci8-url']="http://www.apachefriends.org/faq-lampp-en.html#oci8";

$TEXT['status-lookfaq']="lees de FAQ";
$TEXT['status-ok']="GEACTIVEERD";
$TEXT['status-nok']="GEDEACTIVEERD";

$TEXT['status-tab1']="Component";
$TEXT['status-tab2']="Status";
$TEXT['status-tab3']="Hint";

// ---------------------------------------------------------------------
// SECURITY
// ---------------------------------------------------------------------

$TEXT['security-head']="XAMPP beveiliging";
$TEXT['security-text1']="Deze bladzijde geeft een overzicht van de beveiligingsstatus van uw XAMPP installatie. (Ga verder met lezen na de tabel.)";
$TEXT['security-text2']="De groen gemarkeerde punten zijn veilig; de rood gemarkeerde punten zijn absoluut onveilig en de geel gemarkeerde punten konden niet gecontroleerd worden (bv. omdat de software tbv de controle niet draait).<p>Om deze zaken op te lossen, of af te sluiten: voer het volgende commande uit <p><b>/opt/lampp/lampp security</b><p>Dit start een interactief  programma.";

$TEXT['security-ok']="VEILIG";
$TEXT['security-nok']="ONVEILIG";
$TEXT['security-noidea']="ONBEKEND";

$TEXT['security-tab1']="Onderwerp";
$TEXT['security-tab2']="Status";

$TEXT['security-checkapache-nok']="Deze XAMPP bladzijden zijn voor iedereen op het netwerk toegankelijk";
$TEXT['security-checkapache-ok']="Deze XAMPP bladzijden zijn niet langer voor iedereen op het netwerk toegankelijk";
$TEXT['security-checkapache-text']="Iedere XAMPP demo bladzijde, waar u nu naar kijkt, is voor iedereen over het netwerk toegankelijk. Eenieder die uw IP adres kent, kan deze bladzijden bekijken.";

$TEXT['security-checkmysqlport-nok']="MySQL is toegankelijk via het netwerk";
$TEXT['security-checkmysqlport-ok']="MySQL is niet langer toegankelijk via het netwerk";
$TEXT['security-checkmysqlport-text']="Dit is een mogelijk of op zijn minst een theoretisch veiligheidslek. En als u veiligheid voor alles wilt, moet u de netwerk-mogelijkheid van MySQL uitschakelen.";

$TEXT['security-checkpmamysqluser-nok']="De phpMyAdmin gebruiker pma heeft geen wachtwoord";
$TEXT['security-checkpmamysqluser-ok']="De phpMyAdmin gebruiker pma heeft niet langer geen wachtwoord";
$TEXT['security-checkpmamysqluser-text']="phpMyAdmin bewaart uw voorkeuren in een extra MySQL database. Om deze gegevens te benaderen gebruikt phpMyAdmin de speciale gebruiker pma. Deze gebruiker heeft in de standaard installatie geen wachtwoord ingesteld en om veiligheidsproblemen te voorkomen moet u deze een wachtwoord geven.";

$TEXT['security-checkmysql-nok']="De MySQL gebruiker root heeft geen wachtwoord";
$TEXT['security-checkmysql-ok']="De MySQL gebruiker root heeft niet langer geen wachtwoord";
$TEXT['security-checkmysql-text']="Iedere lokale gebruiker op deze computer kan uw MySQL database benaderen met beheerdersrechten. U moet een wachtwoord instellen.";

$TEXT['security-checkftpwachtwoord-nok']="Het FTP wachtwoord voor gebruiker nobody is 'lampp'";
$TEXT['security-checkftpwachtwoord-ok']="Het FTP wachtwoord voor gebruiker nobody is niet langer 'lampp'";
$TEXT['security-checkftpwachtwoord-text']="Door gebruik te maken van het standaard wachtwoord voor de FTP gebruiker nobody, kan iedereen bestanden voor uw XAMPP webserver uploaden en wijzigen. Dus als u ProFTPD activeert, moet u een nieuw wachtwoord instellen voor de gebruiker nobody.";

// ---------------------------------------------------------------------
// START
// ---------------------------------------------------------------------

$TEXT['start-head']="Welkom bij XAMPP voor Linux";

$TEXT['start-subhead']="Gefeliciteerd:<br>U hebt XAMPP succesvol op dit systeem geinstalleerd!";

$TEXT['start-text1']="Nu kunt u beginnen met het gebruiken van Apache and Co. Als eerste kunt u  »Status« proberen op de linker navigatie-balk Om er zeker van te zijn dat alles goed werkt.";

$TEXT['start-text2']="Na het testen kunt u de voorbeelden onder de test link bekijken.";

$TEXT['start-text3']="Als u wilt beginnen met programmeren in PHP or Perl (of wat dan ook) kijk dan eerst in de <a target=extern href=http://www.apachefriends.org/lampp-en.html>XAMPP handleiding</a> en doe daar meer informatie op over uw XAMPP installatie.";

$TEXT['start-text4']="Succes,<br>Kai \"Oswald\" Seidler + Kay Vogelgesang";

// ---------------------------------------------------------------------
// MANUALS
// ---------------------------------------------------------------------

$TEXT['manuals-head']="Online documentatie";

$TEXT['manuals-text1']="XAMPP combineeert veel verschillende sofware pakketten in een pakket. hier is een lijst van de standaard en referentie documentatie van de meest belangrijke pakketten.";


$TEXT['manuals-list1']="
<ul>
<li><a href=http://httpd.apache.org/docs-2.0/>Apache 2 documentatie</a>
<li><a href=http://www.php.net/manual/en/>PHP <b>referenz </b>documentatie</a>
<li><a href=http://www.perldoc.com/perl5.8.0/pod/perl.html>Perl documentatie</a>
<li><a href=http://www.mysql.com/documentation/mysql/bychapter/>MySQL documentatie</a>
<li><a href=http://proftpd.linux.co.uk/localsite/Userguide/linked/userguide.html>ProFTPD gebruikershandleiding</a>
<li><a href=http://www.ros.co.nz/pdf/readme.pdf>pdf class documentatie</a>
</ul>";

$TEXT['manuals-text2']="En een lijstje van tutorials en de Apache Friends documentatie pagina:";

$TEXT['manuals-list2']="
<ul>
<li><a href=http://www.apachefriends.org/faq-en.html>Apache Friends documentation</a>
<li><a href=http://www.freewebmasterhelp.com/tutorials/php>PHP Tutorial</a> by David Gowans
<li><a href=http://www.davesite.com/webstation/html/>HTML - An Interactive Tutorial For Beginners</a> by Dave Kristula
<li><a href=http://www.comp.leeds.ac.uk/Perl/start.html>Perl Tutorial</a> by Nik Silver
</ul>";

$TEXT['manuals-text3']="Good luck and have fun! :)";

// ---------------------------------------------------------------------
// COMPONENTS
// ---------------------------------------------------------------------

$TEXT['components-head']="XAMPP componenten";

$TEXT['components-text1']="XAMPP combineert veel verschillende sofware pakketten in een pakket. Hier is een overzicht van alle pakketten.";

$TEXT['components-text2']="Heel veel dank aan de ontwikkelaars van deze programma's.";

$TEXT['components-text3']="In de directory <b>/opt/lampp/licenses</b> vindt u alle licenties en README bestanden van deze programma's.";

// ---------------------------------------------------------------------
// CD COLLECTION DEMO
// ---------------------------------------------------------------------

$TEXT['cds-head']="CD Collectie (Voorbeeld tbv PHP+MySQL+PDF Class)";
$TEXT['cds-head-fpdf']="CD Collectie (Voorbeeld tbv PHP+MySQL+FPDF)";

$TEXT['cds-text1']="Een heel simpel CD programma.";

$TEXT['cds-text2']="CD lijst als <a href='$PHP_SELF?action=getpdf'>PDF document</a>.";

$TEXT['cds-error']="Kon niet verbinden met de database!<br>Draait MySQL, of hebt u het wachtwoord veranderd?";
$TEXT['cds-head1']="Mijn CDs";
$TEXT['cds-attrib1']="Artiest";
$TEXT['cds-attrib2']="Titel";
$TEXT['cds-attrib3']="Jaar";
$TEXT['cds-attrib4']="Opdracht";
$TEXT['cds-sure']="Zeker?";
$TEXT['cds-head2']="Voeg CD toe";
$TEXT['cds-button1']="Verwijder CD";
$TEXT['cds-button2']="Voeg toe CD";

// ---------------------------------------------------------------------
// BIORHYTHM DEMO
// ---------------------------------------------------------------------

$TEXT['bio-head']="Bioritme (Voorbeeld tbv PHP+GD)";

$TEXT['bio-by']="by";
$TEXT['bio-ask']="Vul de geboortedatum in";
$TEXT['bio-ok']="OK";
$TEXT['bio-error1']="Datum";
$TEXT['bio-error2']="is ongeldig";

$TEXT['bio-birthday']="Geboortedatum";
$TEXT['bio-today']="Vandaag";
$TEXT['bio-intellectual']="Intellectueel";
$TEXT['bio-emotional']="Emotioneel";
$TEXT['bio-physical']="Physiek";

// ---------------------------------------------------------------------
// INSTANT ART DEMO
// ---------------------------------------------------------------------

$TEXT['iart-head']="Instant Art (Voorbeeld tbv PHP+GD+FreeType)";
$TEXT['iart-text1']="Font »AnkeCalligraph« by <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['iart-ok']="OK";

// ---------------------------------------------------------------------
// FLASH ART DEMO
// ---------------------------------------------------------------------

$TEXT['flash-head']="Flash Art (Voorbeeld tbv PHP+MING)";
$TEXT['flash-text1']="Font »AnkeCalligraph« by <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['flash-ok']="OK";

// ---------------------------------------------------------------------
// PHONE BOOK DEMO
// ---------------------------------------------------------------------

$TEXT['phonebook-head']="Telefoon Boek (Voorbeeld tbv PHP+SQLite)";

$TEXT['phonebook-text1']="Een erg simpel telefoonboek script. Maar geimplementeerd met een erg modern en up-to-date technologie: SQLite, de SQL database zonder server.";

$TEXT['phonebook-error']="Kon de database niet openen!";
$TEXT['phonebook-head1']="Mijn telefoonnummers";
$TEXT['phonebook-attrib1']="Achternaam";
$TEXT['phonebook-attrib2']="Voornaam";
$TEXT['phonebook-attrib3']="Telefoonnummer";
$TEXT['phonebook-attrib4']="Opdracht";
$TEXT['phonebook-sure']="Zeker?";
$TEXT['phonebook-head2']="Voeg entry toe";
$TEXT['phonebook-button1']="Verwijder";
$TEXT['phonebook-button2']="Voeg toe";

// ---------------------------------------------------------------------
// ABOUT
// ---------------------------------------------------------------------

$TEXT['about-head']="Over XAMPP";

$TEXT['about-subhead1']="Idee en realisatie";

$TEXT['about-subhead2']="Ontwerp";

$TEXT['about-subhead3']="Collaboration";

$TEXT['about-subhead4']="Contact personen";


?>
