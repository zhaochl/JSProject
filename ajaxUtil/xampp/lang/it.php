<?
//Italian translation of XAMPP by Francesco Rossi <francesco.rossi@varesestore.it>
// ---------------------------------------------------------------------
// GLOBAL 
// ---------------------------------------------------------------------

$TEXT['global-xampp']="XAMPP per Linux";
$TEXT['global-showcode']="Mostra codice sorgente";
$TEXT['global-sourcecode']="Codice Sorgente";

// ---------------------------------------------------------------------
// NAVIGATION
// ---------------------------------------------------------------------

$TEXT['navi-xampp']="XAMPP";
$TEXT['navi-welcome']="Benvenuto";
$TEXT['navi-status']="Status";
$TEXT['navi-security']="Sicurezza";
$TEXT['navi-doc']="Documenti";
$TEXT['navi-components']="Componenti";
$TEXT['navi-about']="Info su XAMPP";

$TEXT['navi-demos']="Dimostrazioni";
$TEXT['navi-cdcol']="Collezione CD";
$TEXT['navi-bio']="Bioritmo";
$TEXT['navi-guest']="Guest Book";
$TEXT['navi-iart']="Instant Art";
$TEXT['navi-iart2']="Flash Art";
$TEXT['navi-phonebook']="Rubrica telefonica";

$TEXT['navi-tools']="Strumenti";
$TEXT['navi-phpmyadmin']="phpMyAdmin";
$TEXT['navi-webalizer']="webalizer";
$TEXT['navi-phpsqliteadmin']="phpSQLiteAdmin";
                                                                                                                        
$TEXT['navi-languages']="Languages";

// ---------------------------------------------------------------------
// STATUS
// ---------------------------------------------------------------------

$TEXT['status-head']="Stato XAMPP";
$TEXT['status-text1']="Questa pagina ti offre in una schermata tutte le informazioni su ciò che è attivo e in funzione e cosa non lo è.";
$TEXT['status-text2']="Qulache cambiamento nella configurazione potrebbe causare qualche errore di rilevamento.";

$TEXT['status-mysql']="Database MYSQL";
$TEXT['status-php']="PHP";
$TEXT['status-perl']="Perl";
$TEXT['status-cgi']="Common Gateway Interface (CGI)";
$TEXT['status-ssi']="Server Side Includes (SSI)";
$TEXT['status-mmcache']="Estensioni PHP »eAccelerator«";
$TEXT['status-mmcache-url']="http://www.apachefriends.org/faq-lampp-en.html#mmcache";
$TEXT['status-oci8']="Estensioni PHP »OCI8/Oracle«";
$TEXT['status-oci8-url']="http://www.apachefriends.org/faq-lampp-en.html#oci8";

$TEXT['status-lookfaq']="Consulta le FAQ";
$TEXT['status-ok']="ATTIVATO";
$TEXT['status-nok']="DISATTIVATO";

$TEXT['status-tab1']="ComponentE";
$TEXT['status-tab2']="Stato";
$TEXT['status-tab3']="Hint";

// ---------------------------------------------------------------------
// SECURITY
// ---------------------------------------------------------------------

$TEXT['security-head']="Sicurezza in XAMPP";
$TEXT['security-text1']="Questa schermata fornisce informazioni sullo stato di messa in sicurezza di Xampp (Continuare a leggere dopo la tabella.)";
$TEXT['security-text2']="I moduli segnati in verde sono in sicurezza; I moduli in rosso sono assolutamente vulnerabili e quelli in giallo non sono stati controllati (Il modulo potrebbe non essere funzionante).<p>Per mettere in sicurezza i moduli è sufficiente avviare dalla Console il seguente comando:<p><b>/opt/lampp/lampp security</b><p>This will start an interactive program.";

$TEXT['security-ok']="SICURO";
$TEXT['security-nok']="VULNERABILE";
$TEXT['security-noidea']="STATO SCONOSCIUTO";

$TEXT['security-tab1']="Modulo";
$TEXT['security-tab2']="Stato";

$TEXT['security-checkapache-nok']="Queste pagine sono accessibili da chiunque nella Rete";
$TEXT['security-checkapache-ok']="Queste pagine non sono più accessibile da chiunque nella Rete";
$TEXT['security-checkapache-text']="Tutte le pagine di Xampp che si stanno visualizzando ora sono accessibili da chiunque nella Rete conosca l'indirizzo IP della macchina.";

$TEXT['security-checkmysqlport-nok']="MySQL è accessibile dalla Rete";
$TEXT['security-checkmysqlport-ok']="MySQL non è più accessibile dalla rete";
$TEXT['security-checkmysqlport-text']="Questa è una potenziale vulnerabilità di sistema.";

$TEXT['security-checkpmamysqluser-nok']="L'utente di phpMyAdmin pma non ha password";
$TEXT['security-checkpmamysqluser-ok']="Ora l'utente di phpMyAdmin pma ha una password ";
$TEXT['security-checkpmamysqluser-text']="phpMyAdmin salva le impostazioni in un extra MySQL database. Per accedere a questi dati  phpMyAdmin usa uno speciale user pma. Questo utente ha dalla installazione di default nessuna password impostata.E' consigliata una password.";

$TEXT['security-checkmysql-nok']="L'utente root di MySQL non ha password";
$TEXT['security-checkmysql-ok']="Ora l'utente root MySQL ha una password";
$TEXT['security-checkmysql-text']="Qualsiasi utente locale su Linux può accedere a MySQL con diritti di amministrazione. E' consigliata una password.";

$TEXT['security-checkftppassword-nok']="La password FTP per l'utente nobody è ancora 'lampp'";
$TEXT['security-checkftppassword-ok']="La password FTP per l'utente nobody è stata cambiata";
$TEXT['security-checkftppassword-text']="Usando la password di default per l'utente 'nobody' chiunque può caricare o modificare files del webserver Xampp. E' consigliabile cambiare password.";

// ---------------------------------------------------------------------
// START
// ---------------------------------------------------------------------

$TEXT['start-head']="Benvenuto in XAMPP per Linux";

$TEXT['start-subhead']="Congratulazioni:<br>Hai installato XAMPP correttamente su questo sistema!";

$TEXT['start-text1']="E' ora possibile utilizzare Apache e gli altri servizi. Controllare la sezione 'status' per verificare il corretto funzionamento dei servizi.";

$TEXT['start-text2']="Dopo i test è possibile visitare i link demo nella sezione sottostante.";

$TEXT['start-text3']="Se volessi iniziare la programmazione PHP o Perl (or whatever ;) visita per favore <a target=extern href=http://www.apachefriends.org/lampp-en.html>XAMPP manual</a> per ricevere maggiori informazioni sull'installazione di XAMPP.";

$TEXT['start-text4']="In bocca al lupo,<br>Oswald + Kay Vogelgesang";

// ---------------------------------------------------------------------
// MANUALS
// ---------------------------------------------------------------------

$TEXT['manuals-head']="Documenti ONline";

$TEXT['manuals-text1']="XAMPP assembla molti differenti servizi in un solo pacchetto. Ecco una lista delle risorse principali per i servizi inclusi in Xampp.";


$TEXT['manuals-list1']="
<ul>
<li><a href=http://httpd.apache.org/docs-2.0/>Apache 2 documentation</a>
<li><a href=http://www.php.net/manual/en/>PHP <b>referenz </b>documentation</a>
<li><a href=http://www.perldoc.com/perl5.8.0/pod/perl.html>Perl documentation</a>
<li><a href=http://www.mysql.com/documentation/mysql/bychapter/>MySQL documentation</a>
<li><a href=http://proftpd.linux.co.uk/localsite/Userguide/linked/userguide.html>ProFTPD user guide</a>
<li><a href=http://www.ros.co.nz/pdf/readme.pdf>pdf class documentation</a>
</ul>";

$TEXT['manuals-text2']="Ed i tutorials e la pagina dei documenti di apachefriends.org :";

$TEXT['manuals-list2']="
<ul>
<li><a href=http://www.apachefriends.org/faq-en.html>Apache Friends documentation</a>
<li><a href=http://www.freewebmasterhelp.com/tutorials/php>PHP Tutorial</a> by David Gowans
<li><a href=http://www.davesite.com/webstation/html/>HTML - An Interactive Tutorial For Beginners</a> by Dave Kristula
<li><a href=http://www.comp.leeds.ac.uk/Perl/start.html>Perl Tutorial</a> by Nik Silver
</ul>";

$TEXT['manuals-text3']="In bocca al lupo e buon divertimento! :)";

// ---------------------------------------------------------------------
// COMPONENTS
// ---------------------------------------------------------------------

$TEXT['components-head']="Compnenti XAMPP";

$TEXT['components-text1']="XAMPP assembla molti differenti servizi in un solo pacchetto. Ecco un breve elenco di tutti i servizi.";

$TEXT['components-text2']="Grazie mille agli sviluppatori di questi servizi.";

$TEXT['components-text3']="Nella cartella <b>/opt/lampp/licenses</b> troverai le licenze e i README files di questi programmi.";

// ---------------------------------------------------------------------
// CD COLLECTION DEMO
// ---------------------------------------------------------------------

$TEXT['cds-head']="CD Collection (Example for PHP+MySQL+PDF Class)";

$TEXT['cds-text1']="Un semplice programma CD";

$TEXT['cds-text2']="CD list as <a href='$PHP_SELF?action=getpdf'>PDF document</a>.";

$TEXT['cds-error']="Impossibile connettersi al database!<br>MySql è in funzione?";
$TEXT['cds-head1']="I miei CD";
$TEXT['cds-attrib1']="Artista";
$TEXT['cds-attrib2']="Titolo";
$TEXT['cds-attrib3']="Anno";
$TEXT['cds-attrib4']="Comando";
$TEXT['cds-sure']="Sicuro?";
$TEXT['cds-head2']="Aggiungi CD";
$TEXT['cds-button1']="CANCELLA CD";
$TEXT['cds-button2']="AGGIUNGI CD";

// ---------------------------------------------------------------------
// BIORHYTHM DEMO
// ---------------------------------------------------------------------

$TEXT['bio-head']="Bioritmo (Example for PHP+GD)";

$TEXT['bio-by']="per";
$TEXT['bio-ask']="Inserisci la tua data di nascita";
$TEXT['bio-ok']="OK";
$TEXT['bio-error1']="Data";
$TEXT['bio-error2']="non valida";

$TEXT['bio-birthday']="Compleanno";
$TEXT['bio-today']="Oggi";
$TEXT['bio-intellectual']="Intellettuale";
$TEXT['bio-emotional']="Emmozionale";
$TEXT['bio-physical']="Fisico";

// ---------------------------------------------------------------------
// INSTANT ART DEMO
// ---------------------------------------------------------------------

$TEXT['iart-head']="Instant Art (Example for PHP+GD+FreeType)";
$TEXT['iart-text1']="Font »AnkeCalligraph« by <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['iart-ok']="OK";

// ---------------------------------------------------------------------
// FLASH ART DEMO
// ---------------------------------------------------------------------

$TEXT['flash-head']="Flash Art (Example for PHP+MING)";
$TEXT['flash-text1']="Font »AnkeCalligraph« by <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['flash-ok']="OK";

// ---------------------------------------------------------------------
// PHONE BOOK DEMO
// ---------------------------------------------------------------------

$TEXT['phonebook-head']="Rubrica Telefonica (Example for PHP+SQLite)";

$TEXT['phonebook-text1']="Una semplice rubrica ma con un moderno databasa: sql lite.";

$TEXT['phonebook-error']="Impossibile aprire il database!";
$TEXT['phonebook-head1']="Numeri di telefono";
$TEXT['phonebook-attrib1']="Cognome";
$TEXT['phonebook-attrib2']="Nome";
$TEXT['phonebook-attrib3']="Numero";
$TEXT['phonebook-attrib4']="Command";
$TEXT['phonebook-sure']="Sicuro?";
$TEXT['phonebook-head2']="Aggiungi";
$TEXT['phonebook-button1']="CANCELLA";
$TEXT['phonebook-button2']="AGGIUNGI";

// ---------------------------------------------------------------------
// ABOUT
// ---------------------------------------------------------------------

$TEXT['about-head']="Informazioni su XAMPP";

$TEXT['about-subhead1']="Idea e realizzazione";

$TEXT['about-subhead2']="Design";

$TEXT['about-subhead3']="Collaborazione";

$TEXT['about-subhead4']="Contatti"

?>
