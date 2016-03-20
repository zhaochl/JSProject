<?
// ---------------------------------------------------------------------
// GLOBAL
// ---------------------------------------------------------------------

$TEXT['global-xampp']="XAMPP for Linux";

// ---------------------------------------------------------------------
// NAVIGASJON
// ---------------------------------------------------------------------

$TEXT['navi-xampp']="XAMPP";
$TEXT['navi-welcome']="Velkommen";
$TEXT['navi-status']="Status";
$TEXT['navi-security']="Sikkerhet";
$TEXT['navi-doc']="Dokumentasjon";
$TEXT['navi-components']="Komponenter";
$TEXT['navi-about']="Om XAMPP";

$TEXT['navi-demos']="Demoer";
$TEXT['navi-cdcol']="CD Samling";
$TEXT['navi-bio']="Bursdagsrytme";
$TEXT['navi-guest']="Gjestebok";
$TEXT['navi-perlenv']="MiniPerl";
$TEXT['navi-iart']="�yeblikkelig Kunst";
$TEXT['navi-iart2']="Flash Kunst";
$TEXT['navi-phonebook']="Telefonbok";
$TEXT['navi-perlasp']="Perl:ASP";
$TEXT['navi-pear']="PEAR:Excel_Writer";
$TEXT['navi-adodb']="ADOdb";
$TEXT['navi-perl']="Perl";
$TEXT['navi-python']="Python";
$TEXT['navi-jsp']="Java";
$TEXT['navi-phpswitch']="PHP Switch";

$TEXT['navi-tools']="Verkt�y";
$TEXT['navi-phpmyadmin']="phpMyAdmin";
$TEXT['navi-webalizer']="Webalizer";
$TEXT['navi-mercury']="Mercury Mail";
$TEXT['navi-filezilla']="FileZilla FTP";
$TEXT['navi-jpgraph']="JpGraph";

$TEXT['navi-specialguest']="N�v�rende Gjest";
$TEXT['navi-guest1']="FCKeditor";

$TEXT['navi-languages']="Spr�k";

// ---------------------------------------------------------------------
// STATUS
// ---------------------------------------------------------------------

$TEXT['status-head']="XAMPP Status";
$TEXT['status-text1']="Denne siden gir deg all informasjon om dine applikasjoner som kj�rer og ikke er opperative";
$TEXT['status-text2']="Noen endringer i demo konfigurasjonene gir feil status som med  SSL (https://localhost) alle disse rapportene fungerer ikke!";

$TEXT['status-mysql']="MySQL database";
$TEXT['status-ssl']="HTTPS (SSL)";
$TEXT['status-php']="PHP";
$TEXT['status-perl']="Perl med mod_perl";
$TEXT['status-cgi']="Common Gateway Interface (CGI)";
$TEXT['status-ssi']="Server Side Includes (SSI)";
$TEXT['status-python']="Python med mod_python";
$TEXT['status-mmcache']="PHP tilleggspakke �eAccelerator�";
$TEXT['status-mmcache-url']="http://www.apachefriends.org/faq-xampp-linux-en.html#mmcache";
$TEXT['status-smtp']="SMTP Service";
$TEXT['status-ftp']="FTP Service";
$TEXT['status-tomcat']="Tomcat Service";
$TEXT['status-named']="Navneserver (DNS/NS)";
$TEXT['status-oci8']="PHP tilleggspakke �OCI8/Oracle�";
$TEXT['status-oci8-url']="http://www.apachefriends.org/faq-lampp-en.html#oci8";

$TEXT['status-lookfaq']="se FAQ";
$TEXT['status-ok']="OPPERATIV";
$TEXT['status-nok']="NEDE";

$TEXT['status-tab1']="Komonent";
$TEXT['status-tab2']="Status";
$TEXT['status-tab3']="Hint";

// ---------------------------------------------------------------------
// SIKKERHET
// ---------------------------------------------------------------------

$TEXT['security-head']="XAMPP SIKKERHET";
$TEXT['security-text1']="Denne siden gir deg en oversikt om Statusen p� sikkerheten p� din XAMPP installasjon.(Vennligst forsett lesingen etter tabellen.)";
$TEXT['security-text2']="Det gr�nnmerkede omr�det er sikkert; det r�dmerkede omr�det er usikkert og gulmerkede omr�det er statusen ukjent for (for eksempel applikasjonen kj�rer ikke).<p>To fix or close all these matters simply call<p><b>/opt/lampp/lampp security</b><p>This will start an interactive program.";

$TEXT['security-ok']="SIKRET";
$TEXT['security-nok']="USIKRET";
$TEXT['security-noidea']="UKJENT STATUS";

$TEXT['security-tab1']="Tittel";
$TEXT['security-tab2']="Status";

$TEXT['security-checkapache-nok']="Disse XAMPP sidene er tillatt for alle brukere av Nettverket";
$TEXT['security-checkapache-ok']="Disse XAMPP sidene er ikke lengre tillatt for alle brukere av Nettverket";
$TEXT['security-checkapache-text']="Hver eneste  XAMPP side du ser p� akkurat n� er tilgjengelig for alle brukere som nettverket. Alle som vet din Ip Adresse kan se disse sidene.";

$TEXT['security-checkmysqlport-nok']="MySQL er tilgjengelig over Nettverket";
$TEXT['security-checkmysqlport-ok']="MySQL er ikke lengre tilgjengelig over Nettverket";
$TEXT['security-checkmysqlport-text']="Dette er en potensiell eller mulighet sikkerhetsrisiko, og er du n�ye p� sikkerheten burde du sperre MySql brukersnitt tilgangen via Nettverket.";

$TEXT['security-checkpmamysqlbruker-nok']="Brukeren av phpMyAdmin har ikke noe passord satt";
$TEXT['security-checkpmamysqlbruker-ok']="Brukeren av phpMyAdmin har ikke lengre noen passord";
$TEXT['security-checkpmamysqlbruker-ytext']="phpMyAdmin lagrer dine inntillinger i en ekstra MySQL database. For � f� tilgang til denne dataen bruk phpMyAdmin og superbrukeren pma. Denne brukeren har i standard installasjonen ikke noen passord satt, og for � unng� et sikkerhetsproblem burde du gi Vedkommende et passord.";

$TEXT['security-checkmysql-nok']="Administratorbrukeren av MySQL har IKKE satt noen passord";
$TEXT['security-checkmysql-ok']="Administratorbrukeren av MySQL har ikke lengre passord satt";
$TEXT['security-checkmysql-text']="Hver lokal Linuxmaskin kan f� tilgang til din MySql database med administrator rettigheter. Du BURDE sette et passord.";

$TEXT['security-pop-nok']="Testbrukeren (nybruker) for Mercury Mail serveren (POP3) har et gammelt passord(wampp)";
$TEXT['security-pop-ok']="Testbrukeren \"newuser\" for POP3 serveren (Mercury Mail?) eksisterer ikke lengre eller har nytt passord";
$TEXT['security-pop-out']="En POP3 server som Mercury Mail er ikke opperativ eller er blokkert av en brannmur!";
$TEXT['security-pop-notload']="<I>Den n�dvendige IMAP tilleggspakken for denne sikkerhetstesten starter ikke (php.ini)!</I><br>";
$TEXT['security-pop-text']="Vennligst sjekk og kanskje rediger brukerne og passord i konfigurasjonen til Mercury Mail serveren!";

$TEXT['security-checkftppassword-nok']="FTP passordet er forsatt 'lampp'";
$TEXT['security-checkftppassword-ok']="FTP passordet var velykket endret";
$TEXT['security-checkftppassword-out']="FTP serveren er nede eller blir blokkern av en brannmur!";
$TEXT['security-checkftppassword-text']="Hvis FTP serveren var startet, standardbrukeren 'nobody' med passordet  'lampp' kan laste opp � endre filer p� XAMPP webserveren.";

$TEXT['security-phpmyadmin-nok']="PhpMyAdmin er fullt tilgjengelig via Nettverket";
$TEXT['security-phpmyadmin-ok']="PhpMyAdmin passord login is aktivert.";
$TEXT['security-phpmyadmin-out']="PhpMyAdmin: Kunne ikke finne 'config.inc.php' ...";
$TEXT['security-phpmyadmin-text']="PhpMyAdmin er tilgjengelig fra nettverk uten passord. Konfigurasjonen 'httpd' eller 'cookie' i filen \"config.inc.php\" kan hjelpe.";

$TEXT['security-checkphp-nok']="PHP kj�rer ikke i \"safe mode\"";
$TEXT['security-checkphp-ok']="PHP kj�rer i \"safe mode\"";
$TEXT['security-checkphp-out']="Ingen mulighet for � kontrollere PHP innstillingen!";
$TEXT['security-checkphp-text']="Hvis du vil tilate andre utenfor netverket � se din php opplegg, vennligst foretrekk \"safe mode\" innstillingene. Men for kun kj�ring av PHP sider internt og utvikling annbefales da IKKE � bruke \"safe mode\" innstillingene pga. noen viktige funksjoner vil da ikke lengre fungere. <A HREF=\"http://www.php.net/features.safe-mode\" target=\"_new\"><font size=1>Mer Informasjon</font></A>";


// ---------------------------------------------------------------------
// SIKKERHETS INNSTILLINGER
// ---------------------------------------------------------------------

$TEXT['mysql-security-head']="Sikkerhets konsoll MySQL & XAMPP katalog beskyttelse";
$TEXT['mysql-rootsetup-head']="MYSQL SECTION: \"ROOT\" PASSORD";
$TEXT['mysql-rootsetup-text1']="";
$TEXT['mysql-rootsetup-notrunning']="MySQL serveren er nede eller blokkert av en brannmur! Vennligst sjekk at den er startet ev. Brannmurer";
$TEXT['mysql-rootsetup-passwdnotok']="The nye passordet er identisk med det gamle. Vennligs tast inn passord to ganger for � vertifisere og f� satt nytt passord!";
$TEXT['mysql-rootsetup-passwdnull']="Null passord ('') vil ikke bli akseptert!";
$TEXT['mysql-rootsetup-passwdsuccess']="SUKSESS: Passordet for Superbrukeren eller'root' ble oppdatert eller satt!
Legg merke til: For at det nye passordet skal tre i kraft for \"root\" m� MYSQL restartes !!!! Dataen med det nye passordet er sikkert i f�lgende fil:";
$TEXT['mysql-rootsetup-passwdnosuccess']="ERROR: Da muligens root passordet var feil, MySQL nektet login med angitt root passord.";
$TEXT['mysql-rootsetup-passwdold']="N�v�rende passord:";
$TEXT['mysql-rootsetup-passwd']="Nytt Passord:";
$TEXT['mysql-rootsetup-passwdrepeat']="Gjenta det nye passordet:";
$TEXT['mysql-rootsetup-passwdchange']="Passord endring";
$TEXT['mysql-rootsetup-phpmyadmin']="PhpMyAdmin identifikasjon:";

$TEXT['xampp-setup-head']="XAMPP KATALOG BESKYTTELSE (.htaccess)";
$TEXT['xampp-setup-bruker']="bruker:";
$TEXT['xampp-setup-passwd']="Passord:";
$TEXT['xampp-setup-start']="Gj� XAMPP katalogen sikker";
$TEXT['xampp-setup-notok']="<br><br>ERROR: Linjen for brukernavn og passord m� ha minst tre bokstaver/tegn og ikke mer enn 15. Spesielle bokstaver/tegn som <��� (usw.) og tomme rom er ikke lov!<br><br>";
$TEXT['xampp-config-ok']="<br><br>SUCCESS: The XAMPP directory is protected now! All personal data was safed in the following file:<br>";
$TEXT['xampp-config-notok']="<br><br>ERROR: Ditt system kunne IKKE aktivere katalog gjenoppretelse beskyttelse med filen \".htaccess\" og \"htpasswd.exe\". Kanskje PHP er i \"Safe Mode\". <br><br>";

// ---------------------------------------------------------------------
// START
// ---------------------------------------------------------------------

$TEXT['start-head']="Velkommen til XAMPP for Linux";

$TEXT['start-subhead']="Gratulerer:<br>Du har vellykket installert XAMPP p� din maskin!";

$TEXT['start-text1']="N� kan du starte � bruke  Apache og Co. F�rst burde du pr�ve  �Status� p� menyen p� venstre, og s�rge for at alt funger slik det skal.";

$TEXT['start-text2']="<B>Nyhet i gjeldene versjon: Sikkerhets sjekken!</B>";

$TEXT['start-text3']="";

$TEXT['start-text4']="";

$TEXT['start-text5']="";

$TEXT['start-text6']="Lykke Til, Kai 'Oswald' Seidler + Kay Vogelgesang";

// ---------------------------------------------------------------------
// MANUALER
// ---------------------------------------------------------------------

$TEXT['manuals-head']="Online dokumentasjon";

$TEXT['manuals-text1']="XAMPP best�r av mange forskjellige programmer sammensveiset til en pakke.Her er en liste av med linker til dokumentasjon for de ulike programmene som er brukt i XAMPP.";


$TEXT['manuals-list1']="
<ul>
<li><a href=http://httpd.apache.org/docs-2.0/>Apache 2 dokumentasjon</a>
<li><a href=http://www.php.net/manual/en/>PHP <b>referenz </b>dokumentasjon</a>
<li><a href=http://www.perldoc.com/perl5.8.0/pod/perl.html>Perl dokumentasjon</a>
<li><a href=http://www.mysql.com/documentation/mysql/bychapter/>MySQL dokumentasjon</a>
<li><a href=http://php.weblogs.com/ADODB>ADODB</a>
<li><a href=http://eaccelerator.net/>eAccelerator for PHP</a>
<li><a href=http://www.ros.co.nz/pdf/readme.pdf>pdf class dokumentasjon</a>
</ul>";

$TEXT['manuals-text2']="Og en liten liste med verkt�y og dokumentasjon av Apachefriends:";

$TEXT['manuals-list2']="
<ul>
<li><a href=http://www.apachefriends.org/faq-en.html>Apache Friends dokumentasjon</a>
<li><a href=http://www.freewebmasterhelp.com/tutorials/php>PHP Verkt�y</a> av David Gowans
<li><a href=http://www.davesite.com/webstation/html/>HTML - Et Interaktiv Verkt�y For Nybegynnere</a> av Dave Kristula
<li><a href=http://www.comp.leeds.ac.uk/Perl/start.html>Perl Verkt�y</a> av Nik Silver
</ul>";

$TEXT['manuals-text3']="Good luck and have fun! :)";

// ---------------------------------------------------------------------
// COMPONENTS
// ---------------------------------------------------------------------

$TEXT['components-head']="XAMPP komponenter";

$TEXT['components-text1']="XAMPP best�r av mange forskjellige programmer sammensveiset til en pakke. Her er en oversikt over alle pakkene.";

$TEXT['components-text2']="Stor takk til utviklerne av disse programmene.";

$TEXT['components-text3']="I katalogen <b>/opt/lampp/licenses</b> vil du finne alle lisens informasjonen for disse programmene.";

// ---------------------------------------------------------------------
// CD SAMLING EKSEMPEL
// ---------------------------------------------------------------------

$TEXT['cds-head']="CD Samling (Eksempel for PHP+MySQL+PDF Class)";
$TEXT['cds-head-fpdf']="CD Samling (Eksempel for PHP+MySQL+FPDF)";

$TEXT['cds-text1']="Et veldig enkelt cd program.";

$TEXT['cds-text2']="CD listen er <a href='$PHP_SELF?action=getpdf'>PDF dokument</a>.";

$TEXT['cds-error']="Kunne ikke koble til databse!<br>Er MySQL opprativ eller har du endret passord?";
$TEXT['cds-head1']="Mine CDer";
$TEXT['cds-attrib1']="Artister";
$TEXT['cds-attrib2']="Tittel";
$TEXT['cds-attrib3']="�r";
$TEXT['cds-attrib4']="Kommando";
$TEXT['cds-sure']="Sikker?";
$TEXT['cds-head2']="Legg til CD";
$TEXT['cds-button1']="Slett CD";
$TEXT['cds-button2']="Legg til CD";

// ---------------------------------------------------------------------
// BURSDAGSRYTME EKSEMPEL
// ---------------------------------------------------------------------

$TEXT['bio-head']="Bursdagsrytme (Eksempel for PHP+GD)";

$TEXT['bio-by']="av";
$TEXT['bio-ask']="Vennligst skriv datoen for din bursdag";
$TEXT['bio-ok']="OK";
$TEXT['bio-error1']="Dato";
$TEXT['bio-error2']="er ugyldig";

$TEXT['bio-birthday']="Bursdag";
$TEXT['bio-today']="I dag";
$TEXT['bio-intellectual']="Intelligens";
$TEXT['bio-emotional']="F�lelsesfull";
$TEXT['bio-physical']="Pysisk";

// ---------------------------------------------------------------------
// �YEBLIKKELIG KUNST EKSEMPEL
// ---------------------------------------------------------------------

$TEXT['iart-head']="�yeblikkelig Kunst (Eksempel for PHP+GD+FreeType)";
$TEXT['iart-text1']="Font �AnkeCalligraph� av <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['iart-ok']="OK";

// ---------------------------------------------------------------------
// FLASH KUNST EKSEMPEL
// ---------------------------------------------------------------------

$TEXT['flash-head']="Flash Art (Example for PHP+MING)";
$TEXT['flash-text1']="The MING project for win32 does not exist any longer and it is not complete.<br>Please read this: <a class=blue target=extern href=\"http://ming.sourceforge.net/install.html/\">Ming - an SWF output library and PHP module</a>";
$TEXT['flash-ok']="OK";

// ---------------------------------------------------------------------
// PHONE BOOK DEMO
// ---------------------------------------------------------------------

$TEXT['phonebook-head']="Phone Book (Example for PHP+SQLite)";

$TEXT['phonebook-text1']="A very simple phone book script. But implemented with a very modern and up-to-date technology: SQLite, the SQL database without server.";

$TEXT['phonebook-error']="Couldn't open the database!";
$TEXT['phonebook-head1']="My phone numbers";
$TEXT['phonebook-attrib1']="Last name";
$TEXT['phonebook-attrib2']="First name";
$TEXT['phonebook-attrib3']="Phone number";
$TEXT['phonebook-attrib4']="Command";
$TEXT['phonebook-sure']="Sure?";
$TEXT['phonebook-head2']="Add entry";
$TEXT['phonebook-button1']="DELETE";
$TEXT['phonebook-button2']="ADD";

// ---------------------------------------------------------------------
// OM
// ---------------------------------------------------------------------

$TEXT['about-head']="Om XAMPP";

$TEXT['about-subhead1']="Id� og gjennomf�relse";

$TEXT['about-subhead2']="Design";

$TEXT['about-subhead3']="Collaboration";

$TEXT['about-subhead4']="Kontakt personer";

// ---------------------------------------------------------------------
// KODE
// ---------------------------------------------------------------------

$TEXT['srccode-in']="F� kildekoden her";

// ---------------------------------------------------------------------
// MERCURY
// ---------------------------------------------------------------------

$TEXT['mail-head']="Mailing med Mercury Mail SMTP og  POP3 Serveren";
$TEXT['mail-hinweise']="Noen viktige notater for bruk av Mercury!";
$TEXT['mail-adress']="Sender:";
$TEXT['mail-adressat']="Mottaker:";
$TEXT['mail-cc']="CC:";
$TEXT['mail-subject']="Tittel:";
$TEXT['mail-message']="Melding:";
$TEXT['mail-sendnow']="Denne meldingen sendes n�...";
$TEXT['mail-sendok']="Meldingen var sent vellykket!";
$TEXT['mail-sendnotok']="Error! Meldingen var ikke vellykket sent!";
$TEXT['mail-help1']="Notater for bruk av Mercury:<br><br>";
$TEXT['mail-help2']="<UL>
<LI>Mercury beh�ver en ekstern tilkobling n�r den startes;</LI>
<LI>i oppstarten, Mercury deffinerer Navneserver tjenesten (DNS) automatisksom navneserveren av din provider;</LI>
<LI>For all bruk av gateway servere: Vennligst sett din DNS via TCP/IP (f.e. via InterNic with the IP nr. 198.41.0.4);</LI>
<LI>konfigurasjonsfilen til  Mercury er kalt MERCURY.INI;</LI>
<LI>for � teste, vennligst sendt en melding til postmaster@localhost eller admin@localhost og sjekk for disse meldingene i f�lgende mappe: xampp.../mailserver/MAIL/postmaster eller (...)/admin;</LI>
<LI> en testbruker kalt \"newbruker\" (newbruker@localhost) med passordet = wampp;</LI>
<LI>spam og annen mail som inneholder mistenkelige scripts er totall forbudt med Mercury!;</LI> 
</UL>";
$TEXT['mail-url']="<a href=\"http://www.pmail.com/overviews/ovw_mercury.htm\" target=\"_top\">http://www.pmail.com/overviews/ovw_mercury.htm</a>";
// ---------------------------------------------------------------------
// FileZilla FTP 
// ---------------------------------------------------------------------

$TEXT['filezilla-head']="FileZilla FTP Server";
$TEXT['filezilla-install']="Apache er <U>IKKE</U> en FTP Server ... men FileZilla FTP er det. Vennligst ta til vurdering f�lgende refferanser.";
$TEXT['filezilla-install2']="I hovedkatalogen til xampp, start \"filezilla_setup.bat\" for setup. Advarsel: For Windows NT, 2000 and XP Professional, FileZilla m� installeres som en tjeneste.";
$TEXT['filezilla-install3']="Konfigurer \"FileZilla FTP\". For dette vennligst bruk FileZillas Grafiske brukergrensesnitt\"FileZilla Server Interface.exe\". To brukere er i dette eksemplet:<br><br>
A: En standardbruker \"newbruker\", passord \"wampp\". Hjemmekatalogen er xampp\htdocs.<br> 
B: En anonymbruker \"anonymous\", ingen passord. Hjemmekatalogen er  xampp\anonymous.<br><br>
Standard adressen for grensesnittet er loopback adresse 127.0.0.1.";
$TEXT['filezilla-install4']="FTP Serveren avsluttes med \"FileZillaFTP_stop.bat\". For FileZilla FTP som en tjeneste, vennligst bruk \"FileZillaServer.exe\" katalogen, da kan du konfigurere alle oppstartsvalg.";
$TEXT['filezilla-url']="<br><br><a href=\"http://filezilla.sourceforge.net\" target=\"_top\">http://filezilla.sourceforge.net</a>";

// ---------------------------------------------------------------------
// PEAR
// ---------------------------------------------------------------------

$TEXT['pear-head']="Excel eksport med PEAR (PHP)";
$TEXT['pear-text']="En kort <a class=blue target=extern href=\"http://www.contentmanager.de/magazin/artikel_310-print_excel_export_mit_pear.html\">Manual</A> fra Bj�rn Schotte av <a class=blue target=extern href=\"http://www.thinkphp.de/\">ThinkPHP</A> (bare p� Tysk)";
$TEXT['pear-cell']="Verdien for en celle";

// ---------------------------------------------------------------------
// JPGRAPH
// ---------------------------------------------------------------------

$TEXT['jpgraph-head']="JpGraph - Grafe Bibliotek for PHP";
$TEXT['jpgraph-url']="<br><br><a href=\"http://www.aditus.nu/jpgraph/\" target=\"_top\">http://www.aditus.nu/jpgraph/</a>";

// ---------------------------------------------------------------------
// ADODB
// ---------------------------------------------------------------------

$TEXT['ADOdb-head']="ADOdb - Annen DB access (PHP)";
$TEXT['ADOdb-text']="ADOdb st�r for Active Data Objects Data Base. For �yeblikket har st�tte for MySQL, PostgreSQL, Interbase, Firebird, Informix, Oracle, MS SQL 7, Foxpro, Access, ADO, Sybase, FrontBase, DB2, SAP DB, SQLite and generic ODBC. The Sybase, Informix, FrontBase and PostgreSQL drivers are community contributions. You find it here at \(mini)xampp\php\pear\adodb.";
$TEXT['ADOdb-example']="Eksempel:";
$TEXT['ADOdb-dbserver']="Database server (MySQL, Oracle ..?)";
$TEXT['ADOdb-host']="Database server Host (name or IP)";
$TEXT['ADOdb-bruker']="brukernavn ";
$TEXT['ADOdb-password']="Passord";
$TEXT['ADOdb-database']="Databasen som er for�yeblikket tilgjengelig p� serveren";
$TEXT['ADOdb-table']="Valgt tabell i database";
$TEXT['ADOdb-nottable']="<p><B>Tabell ikke funnet!</B>";
$TEXT['ADOdb-notdbserver']="<p><B>Driveren for denne  database serveren eksisterer ikke eller det er en ODBC, ADO eller OLEDB driver!</B>";


// ---------------------------------------------------------------------
// INFORMASJON
// ---------------------------------------------------------------------

$TEXT['info-package']="Pakke";
$TEXT['info-pages']="sider";
$TEXT['info-extension']="Tilleggspakker";
$TEXT['info-module']="Apache modul";
$TEXT['info-description']="Beskrivelse";
$TEXT['info-signature']="Signatur";
$TEXT['info-docdir']="Dokument root";
$TEXT['info-port']="Standard port";
$TEXT['info-service']="Tjenester";
$TEXT['info-examples']="Eksempel";
$TEXT['info-conf']="Konfigurasjons filer";
$TEXT['info-requires']="Krever";
$TEXT['info-alternative']="Alternativ";
$TEXT['info-tomcatwarn']="Advarsel! Tomcat er ikke opprativ p�  port 8080.";
$TEXT['info-tomcatok']="OK! Tomcat opprativ p� port 8080 vellykket.";
$TEXT['info-tryjava']="Java eksempelet (JSP) med Apache MOD_JK.";
$TEXT['info-nococoon']="Advarsel! Tomcat er ikke opprativ p� port 8080. Kan ikke installere
\"Cocoon\" uten at Tomcat er Opprativ!";
$TEXT['info-okcocoon']="Ok! The Tomcat kj�rer normalt. Installasjonen foreg� noen minutter! Installere \"Cocoon\" klikk her ...";

// ---------------------------------------------------------------------
// PHP ST�TTE BYTTE
// ---------------------------------------------------------------------

$TEXT['switch-head']="PHP Bytte 1.0 win32 for XAMPP";
$TEXT['switch-phpversion']="<i><b>For �yeblikket XAMPP bruker "; 
$TEXT['switch-whatis']="<B>Hva gj�r PHP bytte?</B><br>Apachefriends PHP bytte for XAMPP bytter mellom PHP versjon 4 og 5, og (!) tilbake, slik at du kan teste dine skripts b�de med PHP 4 og PHP 5.<p>";
$TEXT['switch-find']="<B>Hvor er det PHP bytter?</B><br>PHP Bytter for XAMPP vil pakke en PHP file (XAMPP install katalogen) med det samme \"php-switch.php\". Du burde bruke denne batch filen for executing: ";
$TEXT['switch-care']="<B>Hva kan v�re vanskelig?</B><br>PHP Bytte vil ikke endre  PHP version, n�r a) the Apache HTTPD kj�rer eller/og b)  \".phpversion\" filen i installasjonskatalogen er ledig eller har en feil. I \".phpversion\", var skrevet for XAMPP n�v�rende PHP versjon nr. \"4\" or \"5\". Vennligst begynn med  \"shutdown\" av Apache HTTPD OG S� start \"php-switch.bat\".<p>";
$TEXT['switch-where4']="<B>Etter dette! Hvor er mine (gamle) konfigurasjonsfiler?</B><br><br>For PHP 4:<br>";
$TEXT['switch-where5']="<br><br>For PHP 5:<br>";
$TEXT['switch-make1']="<B>Hva er det med endringene i konfigurasjonsfilen?</B><br><br>De fungerer! For PHP4 eller PHP5 i<br>";
$TEXT['switch-make2']="<br><br> .. sikret for PHP4 ...<br>";
$TEXT['switch-make3']="<br><br> .. sikret for PHP5 ...<br>";
$TEXT['switch-make4']="<br><br>Og disse filene g�r tilbake med PHP byttet!!<p>";
$TEXT['switch-not']="<B>Min PHP fungerer bra OG jeg vil IKKE \"BYTTE\" !!!</B><br>Supert! Bare glem dette her ... ;-)<br>";

// ---------------------------------------------------------------------
// Cocoon
// ---------------------------------------------------------------------

$TEXT['go-cocoon']="Cocoon -  http://localhost/cocoon/";
$TEXT['path-cocoon']="Og den riktige katalogen p� din maskin: ...\\xampp\\tomcat\\webapps\\cocoon";

// ---------------------------------------------------------------------
// GJEST
// ---------------------------------------------------------------------

$TEXT['guest1-name']="N�v�rende gjester i denne versjonen: <i>FCKeditor</i>";
$TEXT['guest1-text1']="En veldig flott Html online editor med flere JavaScript,beregnet for IE men fungerer ikke med Mozilla FireFox.";
$TEXT['guest1-text2']="FCKeditor Hjemmeside: <a href=\"http://www.fckeditor.net\" target=\"_new\">www.fckeditor.net</a>. Legg merke til:Arial fonten vil ikke fungere her av en eller annen Grunn!"; 
$TEXT['guest1-text3']="<a href=\"guest-FCKeditor/fckedit-dynsiden.php\" target=\"_new\">Eksempel siden var skrevet med FCKeditor.</A>"; 

?>
