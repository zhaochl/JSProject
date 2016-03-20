<?

// ---------------------------------------------------------------------
// GLOBAL
// ---------------------------------------------------------------------

$TEXT['global-xampp']="XAMPP für Linux";
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
$TEXT['navi-about']="Über XAMPP";

$TEXT['navi-demos']="Demos";
$TEXT['navi-cdcol']="CD-Verwaltung";
$TEXT['navi-bio']="Biorhythmus";
$TEXT['navi-guest']="Gästebuch";
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
$TEXT['status-text1']="Auf dieser Übersicht kann man sehen welche XAMPP-Komponenten gestartet sind bzw. welche funktionieren. Sofern nichts an der Konfiguration von XAMPP geändert wurde, sollten MySQL, PHP, Perl, CGI und SSI aktiviert sein.";
$TEXT['status-text2']="Dieser Check funktioniert nur zuverlässig solange nichts an der Konfiguration des Apache geändert wurde. Durch bestimmte Änderungen kann das Ergebnis dieses Tests verfälscht werden.";

$TEXT['status-mysql']="MySQL-Datenbank";
$TEXT['status-php']="PHP";
$TEXT['status-perl']="Perl";
$TEXT['status-cgi']="Common Gateway Interface (CGI)";
$TEXT['status-ssi']="Server Side Includes (SSI)";
$TEXT['status-mmcache']="PHP-Erweiterung »eAccelerator«";
$TEXT['status-mmcache-url']="http://www.apachefriends.org/faq-lampp.html#mmcache";
$TEXT['status-oci8']="PHP-Erweiterung »OCI8/Oracle«";
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
$TEXT['security-text1']="Anhand dieser Übersicht kann man sehen welche Punkte an der XAMPP-Installation noch unsicher sind und noch überprüft werden müssten. (Bitte unter der Tabelle weiterlesen.)";
$TEXT['security-text2']="Die grün markierten Punkte sind sicher; die rot marktierten Punkte sind definitiv unsicher und bei den gelb martierten Punkten konnte die Sicherheit nicht überprüft werden (zum Beispiel weil das zu testende Programm gar nicht läuft).<p>Zum Schließen dieser Sicherheitslücken einfach als root den folgenden Befehl aufrufen:<p><b>/opt/lampp/lampp security</b><p>Dadurch wird ein dialoggeführtes Programm gestartet, welches alle diese Sicherheitslücken schließen kann.";

$TEXT['security-ok']="SICHER";
$TEXT['security-nok']="UNSICHER";
$TEXT['security-noidea']="UNBEKANNT";

$TEXT['security-tab1']="Betreff";
$TEXT['security-tab2']="Status";

$TEXT['security-checkapache-nok']="Diese XAMPP-Seiten sind über's Netzwerk erreichbar";
$TEXT['security-checkapache-ok']="Diese XAMPP-Seiten sind nicht über's Netzwerk erreichbar";
$TEXT['security-checkapache-text']="Alles was Du hier sehen kannst (diese Seiten, dieser Text), kann potentiell auch jedere andere sehren, der Deinen Rechner über's Netzwerk erreichen kann. Wenn Du zum Beispiel mit diesem Rechner ins Internet geht, dann kann jeder im Internet, der Deine IP-Adresse kennt oder rät auf diese Seiten zugreifen.";

$TEXT['security-checkmysqlport-nok']="MySQL ist über's Netzwerk erreichbar";
$TEXT['security-checkmysqlport-ok']="MySQL ist nicht über's Netzwerk erreichbar";
$TEXT['security-checkmysqlport-text']="Auf die MySQL-Datenbank kann potentiell über's Netzwerk zugegriffen werden. Zwar ist es in der Standardinstallation von XAMPP trotzdem nicht möglich von außen Zugriff zur Datenbank zu bekommen. Aber um eine absolute Sicherheit zu bekommen sollte der Netzwerkzugriff auf MySQL abgeschaltet werden.";

$TEXT['security-checkpmamysqluser-nok']="Der phpMyAdmin-Benutzer pma hat kein Passwort";
$TEXT['security-checkpmamysqluser-ok']="Der phpMyAdmin-Benutzer hat ein Passwort";
$TEXT['security-checkpmamysqluser-text']="phpMyAdmin speichtert seine eigenen Einstellungen in der MySQL-Datenbank. phpMyAdmin benutzt dazu den MySQL-Benutzer pma. Damit sonst niemand anderes als phpMyAdmin über diesen Benutzer auf die Datenbank zugreifen kann, sollte diesem Benutzer ein Passwort gesetzt werden.";

$TEXT['security-checkmysql-nok']="MySQL-root hat kein Passwort";
$TEXT['security-checkmysql-ok']="MySQL-root hat ein Passwort";
$TEXT['security-checkmysql-text']="Der MySQL-root hat noch kein Passwort gesetzt bekommen. Jeder Benutzer auf dem Rechner kann so auf der MySQL-Datenbank machen was er will. Der MySQL-root sollte also auf alle Fälle ein Passwort gesetzt bekommen.";

$TEXT['security-checkftppassword-nok']="Das FTP-Passwort ist noch immer 'lampp'";
$TEXT['security-checkftppassword-ok']="Das FTP-Passwort wurde geändert";
$TEXT['security-checkftppassword-text']="Wenn Du ProFTPD im XAMPP aktiviert hast, dann kannst Du standardmäßig mit dem Benutzernamen 'nobody' und dem Passwort 'lampp' Dateien für Deinen Webserver hochladen. Potentiell kann das nun natürlich jeder und daher sollte hier unbeding ein anderes Passwort gesetzt werden.";

// ---------------------------------------------------------------------
// START
// ---------------------------------------------------------------------

$TEXT['start-head']="Willkommen zu XAMPP für Linux";

$TEXT['start-subhead']="Herzlichen Glückwunsch:<br>XAMPP wurde erfolgreich auf diesem Rechner installiert!";

$TEXT['start-text1']="Nun kann es losgehen. :) Als erstes bitte einmal auf der linken Seite auf »Status« klicken. Damit bekommt man einen Überblick was alles schon funktioniert. Ein paar Funktionen werden ausgeschaltet sein. Das ist Absicht so. Es sind Funktionen, die nicht überall funktionieren oder evtl. Probleme bereiten könnten.";

$TEXT['start-text2']="Wer Lust hat kann sich danach mal die Beispielprogramme/Demos darunter anschauen.";

$TEXT['start-text3']="Wen das alles nicht interessiert, sondern gleich anfangen möchte zu programmieren oder Webseiten zu erstellen,
der sollte einfach in die <a target=extern href=http://www.apachefriends.org/lampp.html>XAMPP-Anleitung</a> gucken, wo welche Dateien liegen bzw. hingehören.";

$TEXT['start-text4']="Viel Spaß,<br>Kai \"Oswald\" Seidler + Kay Vogelgesang";

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
<li><a href=http://www.schattenbaum.net/php/>PHP für Dich</a> (incl. MySQL-Einführung) von Claudia Schaffarik
<li><a href=http://selfhtml.teamone.de/>SELFHTML</a> von Stefan Münz
<li><a href=http://cgi.de2.info/>CGI Einführung</a> von Stephan Muller
</ul>";

$TEXT['manuals-text3']="Viel Spaß und Erfolg beim Lesen! :)";

// ---------------------------------------------------------------------
// COMPONENTS
// ---------------------------------------------------------------------

$TEXT['components-head']="XAMPP-Komponenten";

$TEXT['components-text1']="XAMPP verbindet viele unterschiedliche Pakete in einem Paket. Hier ist eine Übersicht aller enthaltenen Pakete.";

$TEXT['components-text2']="Vielen Dank an die unzähligen Autoren dieser Programme.";

$TEXT['components-text3']="Im Verzeichnis <b>/opt/lampp/licenses</b> befinden sich die einzelnen Lizenz-Texte und README-Dateien dieser Pakete.";

// ---------------------------------------------------------------------
// CD COLLECTION DEMO
// ---------------------------------------------------------------------

$TEXT['cds-head']="CD-Verwaltung (Beispiel für PHP+MySQL+PDF Class)";
$TEXT['cds-head-fpdf']="CD-Verwaltung (Beispiel für PHP+MySQL+FPDF)";

$TEXT['cds-text1']="Eine sehr einfach CD-Verwaltung. Da man Eintäge nicht mehr verbessern kann, wenn man sich mal vertippt hat, empfiehlt sich phpMyAdmin (unten links in der Navigation).";

$TEXT['cds-text2']="<b>Neu seit 0.9.6:</b> Ausgabe der eingestellten CDs als <a href='$PHP_SELF?action=getpdf'>PDF-Dokument</a>.";

$TEXT['cds-error']="Kann die Datenbank nicht erreichen!<br>Läuft MySQL oder wurde das Passwort geändert?";
$TEXT['cds-head1']="Meine CDs";
$TEXT['cds-attrib1']="Interpret";
$TEXT['cds-attrib2']="Titel";
$TEXT['cds-attrib3']="Jahr";
$TEXT['cds-attrib4']="Aktion";
$TEXT['cds-sure']="Wirklich sicher?";
$TEXT['cds-head2']="CD hinzufügen";
$TEXT['cds-button1']="CD LÖSCHEN";
$TEXT['cds-button2']="CD HINZUFÜGEN";

// ---------------------------------------------------------------------
// BIORHYTHM DEMO
// ---------------------------------------------------------------------

$TEXT['bio-head']="Biorhythm (mit PHP+GD)";
$TEXT['bio-head']="Biorhythmus (Beispiel für PHP+GD)";

$TEXT['bio-by']="von";
$TEXT['bio-ask']="Bitte gib dein Geburtsdatum ein";
$TEXT['bio-ok']="OK";
$TEXT['bio-error1']="Das Datum";
$TEXT['bio-error2']="ist ungültig";

$TEXT['bio-birthday']="Geburtstag";
$TEXT['bio-today']="Heute";
$TEXT['bio-intellectual']="Intelligenz";
$TEXT['bio-emotional']="Emotion";
$TEXT['bio-physical']="Körper";

// ---------------------------------------------------------------------
// INSTANT ART DEMO
// ---------------------------------------------------------------------

$TEXT['iart-head']="Instant Art (Beispiel für PHP+GD+FreeType)";
$TEXT['iart-text1']="Font »AnkeCalligraph« von <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['iart-ok']="OK";

// ---------------------------------------------------------------------
// FLASH ART DEMO
// ---------------------------------------------------------------------

$TEXT['flash-head']="Flash Art (Beispiel für PHP+MING)";
$TEXT['flash-text1']="Font »AnkeCalligraph« von <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['flash-ok']="OK";

// ---------------------------------------------------------------------
// PHONE BOOK DEMO
// ---------------------------------------------------------------------

$TEXT['phonebook-head']="Telefonbuch (Beispiel für PHP+SQLite)";

$TEXT['phonebook-text1']="Ein sehr einfaches Telefonbuch. Allerdings mit einer sehr aktuellen Technik:<br>SQLite, einer SQL-Datenbank ohne extra Server.";

$TEXT['phonebook-error']="Kann die Datenbank nicht öffnen!";
$TEXT['phonebook-head1']="Meine Telefonnummern";
$TEXT['phonebook-attrib1']="Nachname";
$TEXT['phonebook-attrib2']="Vorname";
$TEXT['phonebook-attrib3']="Telefonnummer";
$TEXT['phonebook-attrib4']="Aktion";
$TEXT['phonebook-sure']="Wirklich sicher?";
$TEXT['phonebook-head2']="Eintrag hinzufügen";
$TEXT['phonebook-button1']="LÖSCHEN";
$TEXT['phonebook-button2']="HINZUFÜGEN";

// ---------------------------------------------------------------------
// ABOUT
// ---------------------------------------------------------------------

$TEXT['about-head']="Über XAMPP";

$TEXT['about-subhead1']="Konzept und Umsetzung";

$TEXT['about-subhead2']="Design";

$TEXT['about-subhead3']="Mitwirkung";

$TEXT['about-subhead4']="Ansprechpartner";

?>
