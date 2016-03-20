<?

// ---------------------------------------------------------------------
// GLOBAL
// ---------------------------------------------------------------------

$TEXT['global-xampp']="XAMPP f�r Linux";
$TEXT['global-showcode']="Quellcode zeigen";
$TEXT['global-sourcecode']="Quellcode";

// ---------------------------------------------------------------------
// NAVIGATION
// ---------------------------------------------------------------------

$TEXT['navi-xampp']="XAMPP";
$TEXT['navi-welcome']="Willkommen";
$TEXT['navi-status']="Status";
$TEXT['navi-security']="Sicherheitscheck";
$TEXT['navi-doc']="Dokumentation";
$TEXT['navi-components']="Komponenten";
$TEXT['navi-about']="�ber XAMPP";

$TEXT['navi-demos']="Demos";
$TEXT['navi-cdcol']="CD-Verwaltung";
$TEXT['navi-bio']="Biorhythmus";
$TEXT['navi-guest']="G�stebuch";
$TEXT['navi-iart']="Instant Art";
$TEXT['navi-iart2']="Flash Art";
$TEXT['navi-phonebook']="Telefonbuch";

$TEXT['navi-tools']="Tools";
$TEXT['navi-phpmyadmin']="phpMyAdmin";
$TEXT['navi-webalizer']="webalizer";
$TEXT['navi-phpsqliteadmin']="phpSQLiteAdmin";
                                                                                                                        
$TEXT['navi-languages']="Sprachen";

// ---------------------------------------------------------------------
// STATUS
// ---------------------------------------------------------------------

$TEXT['status-head']="XAMPP-Status";
$TEXT['status-text1']="Auf dieser �bersicht kann man sehen welche XAMPP-Komponenten gestartet sind bzw. welche funktionieren. Sofern nichts an der Konfiguration von XAMPP ge�ndert wurde, sollten MySQL, PHP, Perl, CGI und SSI aktiviert sein.";
$TEXT['status-text2']="Dieser Check funktioniert nur zuverl�ssig solange nichts an der Konfiguration des Apache ge�ndert wurde. Durch bestimmte �nderungen kann das Ergebnis dieses Tests verf�lscht werden.";

$TEXT['status-mysql']="MySQL-Datenbank";
$TEXT['status-php']="PHP";
$TEXT['status-perl']="Perl";
$TEXT['status-cgi']="Common Gateway Interface (CGI)";
$TEXT['status-ssi']="Server Side Includes (SSI)";
$TEXT['status-mmcache']="PHP-Erweiterung �eAccelerator�";
$TEXT['status-mmcache-url']="http://www.apachefriends.org/faq-lampp.html#mmcache";
$TEXT['status-oci8']="PHP-Erweiterung �OCI8/Oracle�";
$TEXT['status-oci8-url']="http://www.apachefriends.org/faq-lampp.html#oci8";

$TEXT['status-lookfaq']="siehe FAQ";
$TEXT['status-ok']="AKTIVIERT";
$TEXT['status-nok']="DEAKTIVIERT";

$TEXT['status-tab1']="Komponente";
$TEXT['status-tab2']="Status";
$TEXT['status-tab3']="Hinweis";

// ---------------------------------------------------------------------
// SECURITY
// ---------------------------------------------------------------------

$TEXT['security-head']="XAMPP-Sicherheit";
$TEXT['security-text1']="Anhand dieser �bersicht kann man sehen welche Punkte an der XAMPP-Installation noch unsicher sind und noch �berpr�ft werden m�ssten. (Bitte unter der Tabelle weiterlesen.)";
$TEXT['security-text2']="Die gr�n markierten Punkte sind sicher; die rot marktierten Punkte sind definitiv unsicher und bei den gelb martierten Punkten konnte die Sicherheit nicht �berpr�ft werden (zum Beispiel weil das zu testende Programm gar nicht l�uft).<p>Zum Schlie�en dieser Sicherheitsl�cken einfach als root den folgenden Befehl aufrufen:<p><b>/opt/lampp/lampp security</b><p>Dadurch wird ein dialoggef�hrtes Programm gestartet, welches alle diese Sicherheitsl�cken schlie�en kann.";

$TEXT['security-ok']="SICHER";
$TEXT['security-nok']="UNSICHER";
$TEXT['security-noidea']="UNBEKANNT";

$TEXT['security-tab1']="Betreff";
$TEXT['security-tab2']="Status";

$TEXT['security-checkapache-nok']="Diese XAMPP-Seiten sind �ber's Netzwerk erreichbar";
$TEXT['security-checkapache-ok']="Diese XAMPP-Seiten sind nicht �ber's Netzwerk erreichbar";
$TEXT['security-checkapache-text']="Alles was Du hier sehen kannst (diese Seiten, dieser Text), kann potentiell auch jedere andere sehren, der Deinen Rechner �ber's Netzwerk erreichen kann. Wenn Du zum Beispiel mit diesem Rechner ins Internet geht, dann kann jeder im Internet, der Deine IP-Adresse kennt oder r�t auf diese Seiten zugreifen.";

$TEXT['security-checkmysqlport-nok']="MySQL ist �ber's Netzwerk erreichbar";
$TEXT['security-checkmysqlport-ok']="MySQL ist nicht �ber's Netzwerk erreichbar";
$TEXT['security-checkmysqlport-text']="Auf die MySQL-Datenbank kann potentiell �ber's Netzwerk zugegriffen werden. Zwar ist es in der Standardinstallation von XAMPP trotzdem nicht m�glich von au�en Zugriff zur Datenbank zu bekommen. Aber um eine absolute Sicherheit zu bekommen sollte der Netzwerkzugriff auf MySQL abgeschaltet werden.";

$TEXT['security-checkpmamysqluser-nok']="Der phpMyAdmin-Benutzer pma hat kein Passwort";
$TEXT['security-checkpmamysqluser-ok']="Der phpMyAdmin-Benutzer hat ein Passwort";
$TEXT['security-checkpmamysqluser-text']="phpMyAdmin speichtert seine eigenen Einstellungen in der MySQL-Datenbank. phpMyAdmin benutzt dazu den MySQL-Benutzer pma. Damit sonst niemand anderes als phpMyAdmin �ber diesen Benutzer auf die Datenbank zugreifen kann, sollte diesem Benutzer ein Passwort gesetzt werden.";

$TEXT['security-checkmysql-nok']="MySQL-root hat kein Passwort";
$TEXT['security-checkmysql-ok']="MySQL-root hat ein Passwort";
$TEXT['security-checkmysql-text']="Der MySQL-root hat noch kein Passwort gesetzt bekommen. Jeder Benutzer auf dem Rechner kann so auf der MySQL-Datenbank machen was er will. Der MySQL-root sollte also auf alle F�lle ein Passwort gesetzt bekommen.";

$TEXT['security-checkftppassword-nok']="Das FTP-Passwort ist noch immer 'lampp'";
$TEXT['security-checkftppassword-ok']="Das FTP-Passwort wurde ge�ndert";
$TEXT['security-checkftppassword-text']="Wenn Du ProFTPD im XAMPP aktiviert hast, dann kannst Du standardm��ig mit dem Benutzernamen 'nobody' und dem Passwort 'lampp' Dateien f�r Deinen Webserver hochladen. Potentiell kann das nun nat�rlich jeder und daher sollte hier unbeding ein anderes Passwort gesetzt werden.";

// ---------------------------------------------------------------------
// START
// ---------------------------------------------------------------------

$TEXT['start-head']="Willkommen zu XAMPP f�r Linux";

$TEXT['start-subhead']="Herzlichen Gl�ckwunsch:<br>XAMPP wurde erfolgreich auf diesem Rechner installiert!";

$TEXT['start-text1']="Nun kann es losgehen. :) Als erstes bitte einmal auf der linken Seite auf �Status� klicken. Damit bekommt man einen �berblick was alles schon funktioniert. Ein paar Funktionen werden ausgeschaltet sein. Das ist Absicht so. Es sind Funktionen, die nicht �berall funktionieren oder evtl. Probleme bereiten k�nnten.";

$TEXT['start-text2']="Wer Lust hat kann sich danach mal die Beispielprogramme/Demos darunter anschauen.";

$TEXT['start-text3']="Wen das alles nicht interessiert, sondern gleich anfangen m�chte zu programmieren oder Webseiten zu erstellen,
der sollte einfach in die <a target=extern href=http://www.apachefriends.org/lampp.html>XAMPP-Anleitung</a> gucken, wo welche Dateien liegen bzw. hingeh�ren.";

$TEXT['start-text4']="Viel Spa�,<br>Kai \"Oswald\" Seidler + Kay Vogelgesang";

// ---------------------------------------------------------------------
// MANUALS
// ---------------------------------------------------------------------

$TEXT['manuals-head']="Online-Dokumentation";

$TEXT['manuals-text1']="XAMPP verbindet viele unterschiedliche Pakete in einem Paket. Hier ist eine Auswahl der Standard- und Referenz-Dokumentationen zu den wichtigsten Paketen von XAMPP.";


$TEXT['manuals-list1']="
<ul>
<li><a href=http://httpd.apache.org/docs-2.0/>Apache 2 Dokumentation (in Englisch)</a>
<li><a href=http://www.php.net/manual/de/>PHP <b>Referenz-</b>Dokumentation (in Deutsch)</a>
<li><a href=http://www.perldoc.com/perl5.8.0/pod/perl.html>Perl Dokumentation (in Englisch)</a>
<li><a href=http://dev.mysql.com/doc/mysql/de/index.html>MySQL Dokumentation (in Deutsch)</a>
<li><a href=http://proftpd.linux.co.uk/localsite/Userguide/linked/userguide.html>ProFTPD (in Englisch)</a>
<li><a href=http://www.ros.co.nz/pdf/readme.pdf>pdf class Dokumentation</a>
</ul>";

$TEXT['manuals-text2']="Und hier noch eine kleine Auswahl an deutschsprachigen Anleitungen und die zentrale Dokumentations-Seite von Apache Friends:";

$TEXT['manuals-list2']="
<ul>
<li><a href=http://www.apachefriends.org/faq.html>Apache Friends Dokumentation</a>
<li><a href=http://www.schattenbaum.net/php/>PHP f�r Dich</a> (incl. MySQL-Einf�hrung) von Claudia Schaffarik
<li><a href=http://selfhtml.teamone.de/>SELFHTML</a> von Stefan M�nz
<li><a href=http://cgi.de2.info/>CGI Einf�hrung</a> von Stephan Muller
</ul>";

$TEXT['manuals-text3']="Viel Spa� und Erfolg beim Lesen! :)";

// ---------------------------------------------------------------------
// COMPONENTS
// ---------------------------------------------------------------------

$TEXT['components-head']="XAMPP-Komponenten";

$TEXT['components-text1']="XAMPP verbindet viele unterschiedliche Pakete in einem Paket. Hier ist eine �bersicht aller enthaltenen Pakete.";

$TEXT['components-text2']="Vielen Dank an die unz�hligen Autoren dieser Programme.";

$TEXT['components-text3']="Im Verzeichnis <b>/opt/lampp/licenses</b> befinden sich die einzelnen Lizenz-Texte und README-Dateien dieser Pakete.";

// ---------------------------------------------------------------------
// CD COLLECTION DEMO
// ---------------------------------------------------------------------

$TEXT['cds-head']="CD-Verwaltung (Beispiel f�r PHP+MySQL+PDF Class)";
$TEXT['cds-head-fpdf']="CD-Verwaltung (Beispiel f�r PHP+MySQL+FPDF)";

$TEXT['cds-text1']="Eine sehr einfach CD-Verwaltung. Da man Eint�ge nicht mehr verbessern kann, wenn man sich mal vertippt hat, empfiehlt sich phpMyAdmin (unten links in der Navigation).";

$TEXT['cds-text2']="<b>Neu seit 0.9.6:</b> Ausgabe der eingestellten CDs als <a href='$PHP_SELF?action=getpdf'>PDF-Dokument</a>.";

$TEXT['cds-error']="Kann die Datenbank nicht erreichen!<br>L�uft MySQL oder wurde das Passwort ge�ndert?";
$TEXT['cds-head1']="Meine CDs";
$TEXT['cds-attrib1']="Interpret";
$TEXT['cds-attrib2']="Titel";
$TEXT['cds-attrib3']="Jahr";
$TEXT['cds-attrib4']="Aktion";
$TEXT['cds-sure']="Wirklich sicher?";
$TEXT['cds-head2']="CD hinzuf�gen";
$TEXT['cds-button1']="CD L�SCHEN";
$TEXT['cds-button2']="CD HINZUF�GEN";

// ---------------------------------------------------------------------
// BIORHYTHM DEMO
// ---------------------------------------------------------------------

$TEXT['bio-head']="Biorhythm (mit PHP+GD)";
$TEXT['bio-head']="Biorhythmus (Beispiel f�r PHP+GD)";

$TEXT['bio-by']="von";
$TEXT['bio-ask']="Bitte gib dein Geburtsdatum ein";
$TEXT['bio-ok']="OK";
$TEXT['bio-error1']="Das Datum";
$TEXT['bio-error2']="ist ung�ltig";

$TEXT['bio-birthday']="Geburtstag";
$TEXT['bio-today']="Heute";
$TEXT['bio-intellectual']="Intelligenz";
$TEXT['bio-emotional']="Emotion";
$TEXT['bio-physical']="K�rper";

// ---------------------------------------------------------------------
// INSTANT ART DEMO
// ---------------------------------------------------------------------

$TEXT['iart-head']="Instant Art (Beispiel f�r PHP+GD+FreeType)";
$TEXT['iart-text1']="Font �AnkeCalligraph� von <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['iart-ok']="OK";

// ---------------------------------------------------------------------
// FLASH ART DEMO
// ---------------------------------------------------------------------

$TEXT['flash-head']="Flash Art (Beispiel f�r PHP+MING)";
$TEXT['flash-text1']="Font �AnkeCalligraph� von <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['flash-ok']="OK";

// ---------------------------------------------------------------------
// PHONE BOOK DEMO
// ---------------------------------------------------------------------

$TEXT['phonebook-head']="Telefonbuch (Beispiel f�r PHP+SQLite)";

$TEXT['phonebook-text1']="Ein sehr einfaches Telefonbuch. Allerdings mit einer sehr aktuellen Technik:<br>SQLite, einer SQL-Datenbank ohne extra Server.";

$TEXT['phonebook-error']="Kann die Datenbank nicht �ffnen!";
$TEXT['phonebook-head1']="Meine Telefonnummern";
$TEXT['phonebook-attrib1']="Nachname";
$TEXT['phonebook-attrib2']="Vorname";
$TEXT['phonebook-attrib3']="Telefonnummer";
$TEXT['phonebook-attrib4']="Aktion";
$TEXT['phonebook-sure']="Wirklich sicher?";
$TEXT['phonebook-head2']="Eintrag hinzuf�gen";
$TEXT['phonebook-button1']="L�SCHEN";
$TEXT['phonebook-button2']="HINZUF�GEN";

// ---------------------------------------------------------------------
// ABOUT
// ---------------------------------------------------------------------

$TEXT['about-head']="�ber XAMPP";

$TEXT['about-subhead1']="Konzept und Umsetzung";

$TEXT['about-subhead2']="Design";

$TEXT['about-subhead3']="Mitwirkung";

$TEXT['about-subhead4']="Ansprechpartner";

?>
