<?
// Translation for the Windows version of XAMPP by Violetta Marczyk <viki@vstudio.pl>
// ---------------------------------------------------------------------
// GLOBAL
// ---------------------------------------------------------------------

$TEXT['global-xampp']="XAMPP dla Linux";

// ---------------------------------------------------------------------
// NAVIGATION
// ---------------------------------------------------------------------

$TEXT['navi-xampp']="XAMPP";
$TEXT['navi-welcome']="Witamy";
$TEXT['navi-status']="Stan";
$TEXT['navi-security']="Bezpiecze&#324;stwo";
$TEXT['navi-doc']="Dokumentacja";
$TEXT['navi-components']="Komponenty";
$TEXT['navi-about']="Info o XAMPP";

$TEXT['navi-demos']="Przyk&#322;ady";
$TEXT['navi-cdcol']="Kolekcja CD";
$TEXT['navi-bio']="Biorytm";
$TEXT['navi-guest']="Ksi&#281;ga Go&#347;ci";
$TEXT['navi-perlenv']="MiniPerl";
$TEXT['navi-iart']="Instant Art";
$TEXT['navi-iart2']="Flash Art";
$TEXT['navi-phonebook']="Ksi&#261;&#380;ka telefoniczna";
$TEXT['navi-perlasp']="Perl:ASP";
$TEXT['navi-pear']="PEAR:Excel_Writer";
$TEXT['navi-adodb']="ADOdb";
$TEXT['navi-perl']="Perl";
$TEXT['navi-python']="Python";
$TEXT['navi-jsp']="Java";
$TEXT['navi-phpswitch']="PHP Switch";

$TEXT['navi-tools']="Narz&#281;dzia";
$TEXT['navi-phpmyadmin']="phpMyAdmin";
$TEXT['navi-webalizer']="Webalizer";
$TEXT['navi-mercury']="Mercury Mail";
$TEXT['navi-filezilla']="FileZilla FTP";
$TEXT['navi-jpgraph']="JpGraph";
$TEXT['navi-phpsqliteadmin']="phpSQLiteAdmin";

$TEXT['navi-languages']="Languages";

// ---------------------------------------------------------------------
// STATUS
// ---------------------------------------------------------------------

$TEXT['status-head']="Stan XAMPP";
$TEXT['status-text1']="Na tej stronie mo&#380;esz znale&#378;&#263; wszystkie informacje o us&#322;ugach, zar&oacute;wno tych uruchomionych i dzia&#322;aj&#261;cych jak i tych nieaktywnych.";
$TEXT['status-text2']="Pewne zmiany w konfiguracji mog&#261; czasem powodowa&#263; niepoprawne wy&#347;wietlanie stanu aktywno&#347;ci w raporcie. Z us&#322;ug&#261; SSL (https://localhost) wszystkie te raporty nie dzia&#322;aj&#261;!";

$TEXT['status-mysql']="Baza danych MySQL";
$TEXT['status-ssl']="HTTPS (SSL)";
$TEXT['status-php']="PHP";
$TEXT['status-perl']="Perl z mod_perl";
$TEXT['status-cgi']="Common Gateway Interface (CGI)";
$TEXT['status-ssi']="Server Side Includes (SSI)";
$TEXT['status-python']="Python z mod_python";
$TEXT['status-mmcache']="PHP extension »eAccelerator«";
$TEXT['status-mmcache-url']="http://www.apachefriends.org/faq-lampp-en.html#mmcache";
$TEXT['status-smtp']="Us&#322;uga SMTP";
$TEXT['status-ftp']="Us&#322;uga FTP";
$TEXT['status-tomcat']="Us&#322;uga Tomcat";
$TEXT['status-named']="Serwer nazw (DNS)";
$TEXT['status-oci8']="PHP extension »OCI8/Oracle«";
$TEXT['status-oci8-url']="http://www.apachefriends.org/faq-lampp-en.html#oci8";

$TEXT['status-lookfaq']="zobacz FAQ";
$TEXT['status-ok']="AKTYWNY";
$TEXT['status-nok']="NIEAKTYWNY";

$TEXT['status-tab1']="Komponent";
$TEXT['status-tab2']="Stan";
$TEXT['status-tab3']="Informacje";

// ---------------------------------------------------------------------
// SECURITY
// ---------------------------------------------------------------------

$TEXT['security-head']="Bezpiecze&#324;stwo XAMPP";
$TEXT['security-text1']="Na tej stronie znajduj&#261; si&#281; informacje og&oacute;lne o stanie bezpiecze&#324;stwa twojej instalacji XAMPP. (Ci&#261;g dalszy tekstu znajduje si&#281; pod tabelk&#261;.)";
$TEXT['security-text2']="Punkty zaznaczone na zielono s&#261; zabezpieczone; punkty czerwone oznaczaj&#261; brak zabezpieczenia, a punkty &#380;ó&#322;te nie mog&#322;y zosta&#263; sprawdzone (na przyk&#322;ad dlatego, &#380;e us&#322;uga nie jest uruchomiona).<p>To fix or close all these matters simply call<p><b>/opt/lampp/lampp security</b><p>This will start an interactive program.";

$TEXT['security-ok']="BEZPIECZNY";
$TEXT['security-nok']="NIEBEZPIECZNY";
$TEXT['security-noidea']="NIEZNANY";

$TEXT['security-tab1']="Temat";
$TEXT['security-tab2']="Stan";

$TEXT['security-checkapache-nok']="Te strony XAMPP dost&#281;pne z sieci dla ka&#380;dego";
$TEXT['security-checkapache-ok']="Te strony XAMPP ju&#380; nie s&#261; dost&#281;pne z sieci dla ka&#380;dego";
$TEXT['security-checkapache-text']="Ka&#380;da strona demo XAMPP na któr&#261; w&#322;a&#347;nie patrzysz jest dost&#281;pna dla ka&#380;dego w sieci. Ka&#380;dy kto zna Twój adres IP mo&#380;e je zobaczy&#263;.";

$TEXT['security-checkmysqlport-nok']="MySQL jest dost&#281;pny z sieci";
$TEXT['security-checkmysqlport-ok']="MySQL ju&#380; nie jest dost&#281;pny z sieci";
$TEXT['security-checkmysqlport-text']="To potencjalnie i teoretycznie dziura w zabezpieczeniach. Je&#347;li nie wiesz wiele o zabezpieczeniach powniene&#347; zdeaktywowa&#263; dost&#281;p do MySQL z interferjsów sieciowych.";

$TEXT['security-checkpmamysqluser-nok']="U&#380;ytkownik pma w phpMyAdmin nie ma has&#322;a";
$TEXT['security-checkpmamysqluser-ok']="U&#380;ytkownik pma w phpMyAdmin ju&#380; ma has&#322;o";
$TEXT['security-checkpmamysqluser-text']="phpMyAdmin zapisuje Twoje ustawienia w bazie danych MySQL. W celu dost&#281;pu do tych danych phpMyAdmin stosuje specjalnego u&#380;ytkownika pma. Ten u&#380;ytkownik nie ma has&#322;a w standardowej instalacji, wi&#281;c w celu unikni&#281;cia ewentualnych problemów powiniene&#347; ustawi&#263; dla niego has&#322;o dost&#281;pu.";

$TEXT['security-checkmysql-nok']="U&#380;ytkownik root w MySQL nie ma has&#322;a";
$TEXT['security-checkmysql-ok']="U&#380;ytkownik root w MySQL ju&#380; ma has&#322;o";
$TEXT['security-checkmysql-text']="Ka&#380;dy lokalny u&#380;ytkownik w Linuxie ma dost&#281;p do Twojej bazy danych MySQL z prawami administratora. powinienie&#347; ustawi&#263; has&#322;o dost&#281;pu.";

$TEXT['security-checkftppassword-nok']="Has&#322;o dla u&#380;ytkownika nobody w FTP to nadal 'lampp'";
$TEXT['security-checkftppassword-ok']="Has&#322;o dla u&#380;ytkownika nobody w FTP juz nie jest 'lampp'";
$TEXT['security-checkftppassword-text']="Stosuj&#261;c standardowe has&#322;o na u&#380;ytkownika nobody w FTP, ka&#380;dy mo&#380;e wysy&#322;a&#263; lub zmienia&#263; pliki na Twoim serwerze XAMPP. Je&#380;eli uruchomione zosta&#322;o ProFTPD, has&#322;o dla u&#380;ytkownika nobody powinno zosta&#263; zmienione.";

// ---------------------------------------------------------------------
// START
// ---------------------------------------------------------------------

$TEXT['start-head']="Witamy w XAMPP dla Linux";

$TEXT['start-subhead']="Gratulacje:<br>XAMPP zosta&#322; pomy&#347;lnie zainstalowany w tym systemie!";

$TEXT['start-text1']="Teraz mo&#380;esz zacz&#261;&#263; u&#380;ywa&#263; Apache i Co. Po pierwsze sprawd&#378; »Stan« z lewej strony w nawigacji, aby si&#281; upewni&#263;, &#380;e wszystko pracuje poprawnie.";


$TEXT['start-text2']="";

$TEXT['start-text3']="";

$TEXT['start-text4']="";

$TEXT['start-text5']="";

$TEXT['start-text6']="Powodzenia, Kai \"Oswald\" Seidler + Kay Vogelgesang";

// ---------------------------------------------------------------------
// MANUALS
// ---------------------------------------------------------------------

$TEXT['manuals-head']="Dokumentacja online";

$TEXT['manuals-text1']="XAMPP to po&#322;&#261;czenie wielu ró&#380;nych aplikacji w jednym pakiecie. Oto lista standardowej dokumentacji i referencji nawa&#380;niejszych programów.";


$TEXT['manuals-list1']="
<ul>
<li><a href=http://httpd.apache.org/docs-2.0/>Dokumentacja Apache 2</a>
<li><a href=http://www.php.net/manual/en/>Dokumentacja PHP</a>
<li><a href=http://www.perldoc.com/perl5.8.0/pod/perl.html>Dokumentacja Perl</a>
<li><a href=http://www.mysql.com/documentation/mysql/bychapter/>Dokumentacja MySQL</a>
<li><a href=http://www.ros.co.nz/pdf/readme.pdf>Dokumentacja pdf class</a>
</ul>";

$TEXT['manuals-text2']="Oraz krótka lista tutoriali i strona z dokumentacja Apache Friends:";

$TEXT['manuals-list2']="
<ul>
<li><a href=http://www.apachefriends.org/faq-en.html>Dokumentacja Apache Friends</a>
<li><a href=http://www.freewebmasterhelp.com/tutorials/php>PHP Tutorial</a> - autor David Gowans
<li><a href=http://www.davesite.com/webstation/html/>HTML - Interaktywny Tutorial Dla Pocz&#261;tkuj&#261;cych</a> - autor Dave Kristula
<li><a href=http://www.comp.leeds.ac.uk/Perl/start.html>Perl Tutorial</a> - autor Nik Silver
</ul>";

$TEXT['manuals-text3']="Powodzenia i mi&#322;ej zabawy! :)";

// ---------------------------------------------------------------------
// COMPONENTS
// ---------------------------------------------------------------------

$TEXT['components-head']="Komponenty XAMPP";

$TEXT['components-text1']="XAMPP &#322;&#261;czy w sobie wiele ró&#380;nych aplikacji. Oto lista ich wszystkich.";

$TEXT['components-text2']="Podzi&#281;kowania dla developerów tego oprogramowania.";

$TEXT['components-text3']="W katalogu <b>\(mini)xampp\licenses</b> znajduj&#261; si&#281; licencje wszystkich programów.";

// ---------------------------------------------------------------------
// CD COLLECTION DEMO
// ---------------------------------------------------------------------

$TEXT['cds-head']="Kolekcja CD (Przyk&#322;ad na PHP+MySQL+PDF Class)";
$TEXT['cds-head-fpdf']="Kolekcja CD (Przyk&#322;ad na PHP+MySQL+FPDF)";

$TEXT['cds-text1']="Bardzo prosty skrypt CD.";

$TEXT['cds-text2']="Lista CD wygenerowana jako <a href='$PHP_SELF?action=getpdf'>dokument PDF</a>.";

$TEXT['cds-error']="Brak po&#322;&#261;czenia z baz&#261; danych!<br>Sprawd&#378; czy MySQL jest uruchomiony, oraz czy has&#322;o nie zosta&#322;o zmienione.";
$TEXT['cds-head1']="M&oacute;j katalog p&#322;yt CD";
$TEXT['cds-attrib1']="Wykonawca";
$TEXT['cds-attrib2']="Tytu&#322;";
$TEXT['cds-attrib3']="Rok";
$TEXT['cds-attrib4']="Polecenie";
$TEXT['cds-sure']="Na pewno?";
$TEXT['cds-head2']="Dodaj CD";
$TEXT['cds-button1']="USU&#323; CD";
$TEXT['cds-button2']="DODAJ CD";

// ---------------------------------------------------------------------
// BIORHYTHM DEMO
// ---------------------------------------------------------------------

$TEXT['bio-head']="Biorytm (Przyk&#322;ad na PHP+GD)";

$TEXT['bio-by']="autor:";
$TEXT['bio-ask']="Prosz&#281; wpisa&#263; dat&#281; urodzenia:";
$TEXT['bio-ok']="OK";
$TEXT['bio-error1']="Data";
$TEXT['bio-error2']="jest niepoprawna";

$TEXT['bio-birthday']="Urodziny";
$TEXT['bio-today']="Dzi¶";
$TEXT['bio-intellectual']="Intelektualny";
$TEXT['bio-emotional']="Emocjonalny";
$TEXT['bio-physical']="Fizyczny";

// ---------------------------------------------------------------------
// INSTANT ART DEMO
// ---------------------------------------------------------------------

$TEXT['iart-head']="Instant Art (Przyk&#322;ad na PHP+GD+FreeType)";
$TEXT['iart-text1']="Czcionka »AnkeCalligraph« wykonana przez <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['iart-ok']="OK";

// ---------------------------------------------------------------------
// FLASH ART DEMO
// ---------------------------------------------------------------------

$TEXT['flash-head']="Flash Art (Przyk&#322;ad na PHP+MING)";
$TEXT['flash-text1']="Projekt MING dla win32 ju&#380; nie istnieje, nie zosta&#322; nigdy uko&#324;czony.<br>Prosz&#281; przeczyta&#263;: <a class=blue target=extern href=\"http://ming.sourceforge.net/install.html/\">Ming - an SWF output library and PHP module</a>";
$TEXT['flash-ok']="OK";

// ---------------------------------------------------------------------
// PHONE BOOK DEMO
// ---------------------------------------------------------------------

$TEXT['phonebook-head']="Ksi&#261;&#380;ka telefoniczna (Przyk&#322;ad na PHP+SQLite)";

$TEXT['phonebook-text1']="Bardzo prosty skrypt ksi&#261;&#380;ki telefonicznej. Ale dzia&#322;a przy pomocy nowoczesnej technologi: SQLite, baza danych SQL bez serwera.";

$TEXT['phonebook-error']="Nie mo&#380;na otworzy&#263; bazy danych!";
$TEXT['phonebook-head1']="Moje numery telefon&oacute;w";
$TEXT['phonebook-attrib1']="Nazwisko";
$TEXT['phonebook-attrib2']="Imi&#281;";
$TEXT['phonebook-attrib3']="Numer telefonu";
$TEXT['phonebook-attrib4']="Polecenie";
$TEXT['phonebook-sure']="Na pewno?";
$TEXT['phonebook-head2']="Dodaj wpis";
$TEXT['phonebook-button1']="USU&#323;";
$TEXT['phonebook-button2']="DODAJ";

// ---------------------------------------------------------------------
// ABOUT
// ---------------------------------------------------------------------

$TEXT['about-head']="Info o XAMPP";

$TEXT['about-subhead1']="Pomys&#322; i realizacja";

$TEXT['about-subhead2']="Projekt graficzny";

$TEXT['about-subhead3']="Wspó&#322;praca";

$TEXT['about-subhead4']="Kontakt";

// ---------------------------------------------------------------------
// CODE
// ---------------------------------------------------------------------

$TEXT['srccode-in']="Zobacz &#378;r&oacute;d&#322;o tutaj";

// ---------------------------------------------------------------------
// MERCURY
// ---------------------------------------------------------------------

$TEXT['mail-head']="Poczta z Mercury Mail - serwer SMTP i POP3";
$TEXT['mail-hinweise']="Kilka istotnych informacji stosowanych w Mercury!";
$TEXT['mail-adress']="Nadawca:";
$TEXT['mail-adressat']="Odbiorca:";
$TEXT['mail-cc']="Kopia:";
$TEXT['mail-subject']="Temat:";
$TEXT['mail-message']="Wiadomo&#347;&#263;:";
$TEXT['mail-sendnow']="Wiadomo&#347;&#263; jest wysy&#322;ana ...";
$TEXT['mail-sendok']="Wiadomo&#347;&#263; zosta&#322;a pomy&#347;lnie wys&#322;ana!";
$TEXT['mail-sendnotok']="B&#322;&#261;d! Wiadomo&#347;&#263; nie zosta&#322;a wys&#322;ana!";
$TEXT['mail-help1']="Informacje pomocne przy u&#380;ywaniu Mercury:<br><br>";
$TEXT['mail-help2']="<UL>
<LI>Mercury wymaga po&#322;&#261;czenia z internetem przy uruchomieniu;</LI>
<LI>przy starcie, Mercury ustala domen&#281; (DNS) automatycznie od providera;</LI>
<LI>Dla wszystkich u&#380;ytkowniów za firewall'em: Prosz&#281; ustawi&#263; DNS przez TCP/IP (np. przez TPSA z numerem IP 198.168.0.4);</LI>
<LI>plik konfiguracyjny Mercury to MERCURY.INI;</LI>
<LI>aby sprawdzi&#263; konfiguracj&#281;, prosz&#281; przes&#322;a&#263; wiadomo&#347;&#263; do postmaster@localhost lub admin@localhost i sprawdzi&#263; wiadomo&#347;ci w folderach: xampp.../mailserver/MAIL/postmaster lub (...)/admin;</LI>
<LI>test u&#380;ytkownika o nazwie \"newuser\" (newuser@localhost) z has&#322;em = wampp;</LI>
<LI>spam i wszelkie inne negatywne zachowania s&#261; ca&#322;kowicie zabrionione z Mercury!;</LI> 
</UL>";
$TEXT['mail-url']="<a href=\"http://www.pmail.com/overviews/ovw_mercury.htm\" target=\"_top\">http://www.pmail.com/overviews/ovw_mercury.htm</a>";
// ---------------------------------------------------------------------
// FileZilla FTP 
// ---------------------------------------------------------------------

$TEXT['filezilla-head']="Serwer FTP FileZilla";
$TEXT['filezilla-install']="Apache <U>nie</U> jest a Serwerem FTP ... jednak jest nim FileZilla FTP. Please consider the following references.";
$TEXT['filezilla-install2']="W katalogu g&#322;ównym xampp'a, nale&#380;y uruchomi&#263; \"filezilla_setup.bat\" w celu konfiguracji. Uwaga: w Windows NT, 2000 oraz XP Professional, FileZilla musi by&#263; uruchamiana jako us&#322;uga serwisowa.";
$TEXT['filezilla-install3']="Konfiguracja \"FileZilla FTP\". W tym celu, prosz&#281; uruchomi&#263; Interfejs FileZilla z \"FileZilla Server Interface.exe\". Przyk&#322;ad dwóch u&#380;ytkowników:<br><br>
A: u&#380;ytkownik standardowy \"newuser\", has&#322;o \"wampp\". Katalog domowy to xampp\htdocs.<br> 
B: u&#380;ytkownik anonimowy \"anonymous\", bez has&#322;a. Katalog domowy to xampp\anonymous.<br><br>
Standardowy interfejs sieciowy to adres 127.0.0.1.";
$TEXT['filezilla-install4']="Sewer FTP wy&#322;&#261;cza si&#281; przez \"FileZillaFTP_stop.bat\". Aby FileZilla FTP startowa&#322;o jako us&#322;uga serwisowa, prosz&#281; u&#380;y&#263; \"FileZillaServer.exe\" bezpo&#347;rednio. Nast&#281;pnie, mo&#380;na skonfigurowa&#263; wszystkie opcje startowe.";
$TEXT['filezilla-url']="<br><br><a href=\"http://filezilla.sourceforge.net\" target=\"_top\">http://filezilla.sourceforge.net</a>";

// ---------------------------------------------------------------------
// PEAR
// ---------------------------------------------------------------------

$TEXT['pear-head']="Eksport do Excell'a z PEAR (PHP)";
$TEXT['pear-text']="Krótka <a class=blue target=extern href=\"http://www.contentmanager.de/magazin/artikel_310-print_excel_export_mit_pear.html\">Pomoc</A> autorstwa Björn Schotte z <a class=blue target=extern href=\"http://www.thinkphp.de/\">ThinkPHP</A> (tylko w j&#281;zyku niemieckim)";
$TEXT['pear-cell']="Zawarto&#347;&#263; wiersza";

// ---------------------------------------------------------------------
// JPGRAPH
// ---------------------------------------------------------------------

$TEXT['jpgraph-head']="JpGraph - Bilbioteka Graficzna dla PHP";
$TEXT['jpgraph-url']="<br><br><a href=\"http://www.aditus.nu/jpgraph/\" target=\"_top\">http://www.aditus.nu/jpgraph/</a>";

// ---------------------------------------------------------------------
// ADODB
// ---------------------------------------------------------------------

$TEXT['ADOdb-head']="ADOdb - Another DB access (PHP)";
$TEXT['ADOdb-text']="ADOdb jest skrótem od Active Data Objects Data Base. Aktualnie wspierane s&#261; MySQL, PostgreSQL, Interbase, Firebird, Informix, Oracle, MS SQL 7, Foxpro, Access, ADO, Sybase, FrontBase, DB2, SAP DB, SQLite i generic ODBC. Sterowniki do Sybase, Informix, FrontBase i PostgreSQL znajduj&#261; si&#281; w dystrybucjach. Znajduj&#261; si&#281; tutaj \(mini)xampp\php\pear\adodb.";
$TEXT['ADOdb-example']="Na przyk&#322;ad:";
$TEXT['ADOdb-dbserver']="Serwer baz danych (MySQL, Oracle ..?)";
$TEXT['ADOdb-host']="Host serwera DB (nazwa lub IP)";
$TEXT['ADOdb-user']="Login ";
$TEXT['ADOdb-password']="Has&#322;o";
$TEXT['ADOdb-database']="Aktualna baza znajduje si&#281; na tym serwerze";
$TEXT['ADOdb-table']="Wybrana tabela z bazy danych";
$TEXT['ADOdb-nottable']="<p><B>Tabela nieznaleziona!</B>";
$TEXT['ADOdb-notdbserver']="<p><B>Sterowniki do tej bazy danych nie istniej&#261; lub przypuszczanie jest to sterownik ODBC, ADO albo OLEDB!</B>";


// ---------------------------------------------------------------------
// INFO
// ---------------------------------------------------------------------

$TEXT['info-package']="Pakiet";
$TEXT['info-pages']="Strony";
$TEXT['info-extension']="Rozszerzenia";
$TEXT['info-module']="Modu&#322; Apache";
$TEXT['info-description']="Opis";
$TEXT['info-signature']="Sygnaturka";
$TEXT['info-docdir']="Katalog root";
$TEXT['info-port']="Standartowy port";
$TEXT['info-service']="Us&#322;ugi";
$TEXT['info-examples']="Przyk&#322;ady";
$TEXT['info-conf']="Pliki konfiguracyjne";
$TEXT['info-requires']="Wymagania";
$TEXT['info-alternative']="Warianty";
$TEXT['info-tomcatwarn']="Uwaga! Tomcat nie zosta&#322; uruchomiony na porcie 8080.";
$TEXT['info-tomcatok']="OK! Tomcat zosta&#322; uruchomiony na porcie 8080.";
$TEXT['info-tryjava']="The java example (JSP) with Apache MOD_JK.";
$TEXT['info-nococoon']="Uwaga! Tomcat nie zosta&#322; uruchomiony na porcie 8080. Instalacja nie jest mo&#380;liwa
\"Cocoon\" dopóki serwer Tomcat nie zostanie uruchomiony!";
$TEXT['info-okcocoon']="Ok! Serwer Tomcat dzia&#322;a poprawnie. Instalacja mo&#380;e potrwa&#263; kilka minut! Aby zainstalowa&#263; \"Cocoon\" kliknij tutaj ...";

// ---------------------------------------------------------------------
// PHP Switch
// ---------------------------------------------------------------------

$TEXT['switch-head']="PHP Switch 1.0 win32 dla XAMPP";
$TEXT['switch-phpversion']="<i><b>Aktualnie w tym XAMPP jest ";
$TEXT['switch-whatis']="<B>Po co jest PHP switch?</B><br>Apachefriends PHP Switch dla XAMPP prze&#322;&#261;cza pomi&#281;dzy wersjami PHP 4 do wersji 5 I (!) spowrotem. Wi&#281;c mo&#380;esz testowa&#263; swoje skrypty w PHP 4 lub PHP 5.<p>";
$TEXT['switch-find']="<B>Gdzie jest PHP Switch?</B><br>PHP Switch dla XAMPP uruchomi plik PHP (z katalogu instalacyjnego XAMPP) o nazwie \"php-switch.php\". Powieniene&#347; u&#380;ywa&#263; tego pliku wykonywalnego w celu uruchamiania: ";
$TEXT['switch-care']="<B>Co mo&#380;e by&#263; trudnego?</B><br>PHP Switch nie zmieni wersji PHP, je&#347;li a) Apache HTTPD jest uruchomione i/lub b) plik \".phpversion\" w katalogu instalacyjnym nie istnieje lub jest uszkodzony. W \".phpversion\", zosta&#322;o wpisane, &#380;e aktualn&#261; wersj&#261; PHP w XAMPP jest ju&#380; np \"4\" lub \"5\". Prosz&#281; zacz&#261;&#263; od \"wy&#322;&#261;czenia\" serwera Apache HTTPD i NASTÊPNIE uruchomienia  \"php-switch.bat\".<p>";
$TEXT['switch-where4']="<B>A pó&#378;niej! Gdzie s&#261; moje (stare) pliki konfiguracyjne?</B><br><br>Dla PHP 4:<br>";
$TEXT['switch-where5']="<br><br>Dla PHP 5:<br>";
$TEXT['switch-make1']="<B>Co ze zmianami w konfigach?</B><br><br>Instniej&#261;! Dla PHP4 lub PHP5 w<br>";
$TEXT['switch-make2']="<br><br> .. zabezpieczenia dla PHP4 ...<br>";
$TEXT['switch-make3']="<br><br> .. zabezpieczenia dla PHP5 ...<br>";
$TEXT['switch-make4']="<br><br>Te pliki wracaja po prze&#322;&#261;czeniu PHP!!<p>";
$TEXT['switch-not']="<B>Moje PHP jest okay I i go NIE \"prze&#322;&#261;cz&#281;\" !!!</B><br>Super! Teraz o tym zapomnijcie ... ;-)<br>";

?>
