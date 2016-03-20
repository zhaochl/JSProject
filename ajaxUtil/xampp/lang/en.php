<?
// ---------------------------------------------------------------------
// GLOBAL
// ---------------------------------------------------------------------

$TEXT['global-xampp']="XAMPP for Linux";
$TEXT['global-showcode']="Show source code";
$TEXT['global-sourcecode']="Source code";

// ---------------------------------------------------------------------
// NAVIGATION
// ---------------------------------------------------------------------

$TEXT['navi-xampp']="XAMPP";
$TEXT['navi-welcome']="Welcome";
$TEXT['navi-status']="Status";
$TEXT['navi-security']="Security";
$TEXT['navi-doc']="Documentation";
$TEXT['navi-components']="Components";
$TEXT['navi-about']="About XAMPP";

$TEXT['navi-demos']="Demos";
$TEXT['navi-cdcol']="CD Collection";
$TEXT['navi-bio']="Biorhythm";
$TEXT['navi-guest']="Guest Book";
$TEXT['navi-iart']="Instant Art";
$TEXT['navi-iart2']="Flash Art";
$TEXT['navi-phonebook']="Phone Book";

$TEXT['navi-tools']="Tools";
$TEXT['navi-phpmyadmin']="phpMyAdmin";
$TEXT['navi-webalizer']="webalizer";
$TEXT['navi-phpsqliteadmin']="phpSQLiteAdmin";
                                                                                                                        
$TEXT['navi-languages']="Languages";

// ---------------------------------------------------------------------
// STATUS
// ---------------------------------------------------------------------

$TEXT['status-head']="XAMPP Status";
$TEXT['status-text1']="This page offers you on one view all information about what's running and working and what's not.";
$TEXT['status-text2']="Some changes to the configuration sometime may cause false negative status reports.";

$TEXT['status-mysql']="MySQL database";
$TEXT['status-php']="PHP";
$TEXT['status-perl']="Perl";
$TEXT['status-cgi']="Common Gateway Interface (CGI)";
$TEXT['status-ssi']="Server Side Includes (SSI)";
$TEXT['status-mmcache']="PHP extension »eAccelerator«";
$TEXT['status-mmcache-url']="http://www.apachefriends.org/faq-lampp-en.html#mmcache";
$TEXT['status-oci8']="PHP extension »OCI8/Oracle«";
$TEXT['status-oci8-url']="http://www.apachefriends.org/faq-lampp-en.html#oci8";

$TEXT['status-lookfaq']="see FAQ";
$TEXT['status-ok']="ACTIVATED";
$TEXT['status-nok']="DEACTIVATED";

$TEXT['status-tab1']="Component";
$TEXT['status-tab2']="Status";
$TEXT['status-tab3']="Hint";

// ---------------------------------------------------------------------
// SECURITY
// ---------------------------------------------------------------------

$TEXT['security-head']="XAMPP security";
$TEXT['security-text1']="This page gives you a quick overview about the security status of your XAMPP installation. (Please continue reading after the table.)";
$TEXT['security-text2']="The green marked points are secure; the red marked points are definitively unsecure and the yellow marked points couldn't be checked (for example because the sofware to check isn't running).<p>To fix or close all these matters simply call<p><b>/opt/lampp/lampp security</b><p>This will start an interactive program.";

$TEXT['security-ok']="SECURE";
$TEXT['security-nok']="UNSECURE";
$TEXT['security-noidea']="UNKNOWN";

$TEXT['security-tab1']="Subject";
$TEXT['security-tab2']="Status";

$TEXT['security-checkapache-nok']="These XAMPP pages are accessible by network for everyone";
$TEXT['security-checkapache-ok']="These XAMPP pages are no longer accessible by network for everyone";
$TEXT['security-checkapache-text']="Every XAMPP demo page you are right now looking at is accessible for everyone over network. Everyone who knows your IP address can see these pages.";

$TEXT['security-checkmysqlport-nok']="MySQL is accessible by the network";
$TEXT['security-checkmysqlport-ok']="MySQL is no longer accessible over the network";
$TEXT['security-checkmysqlport-text']="This is a potential or at least theoretical security leak. And if you're mad about security you should disable the network interface of MySQL.";

$TEXT['security-checkpmamysqluser-nok']="The phpMyAdmin user pma has no password";
$TEXT['security-checkpmamysqluser-ok']="The phpMyAdmin user pma has no longer no password";
$TEXT['security-checkpmamysqluser-text']="phpMyAdmin saves your preferences in an extra MySQL database. To access this data phpMyAdmin uses the special user pma. This user has in the default installation no password set and to avoid any security problems you should give him a passwort.";

$TEXT['security-checkmysql-nok']="The MySQL user root has no password";
$TEXT['security-checkmysql-ok']="The MySQL user root has no longer no password";
$TEXT['security-checkmysql-text']="Every local user on Linux box can access your MySQL database with administrator rights. You should set a password.";

$TEXT['security-checkftppassword-nok']="The FTP password for user nobody is still 'lampp'";
$TEXT['security-checkftppassword-ok']="The FTP password for user nobody is no langer 'lampp'";
$TEXT['security-checkftppassword-text']="By using the default password for the FTP user nobody everyone can upload and change files for your XAMPP webserver. So if you enabled ProFTPD you should set a new password for user nobody.";

// ---------------------------------------------------------------------
// START
// ---------------------------------------------------------------------

$TEXT['start-head']="Welcome to XAMPP for Linux";

$TEXT['start-subhead']="Congratulations:<br>You successfully installed XAMPP on this system!";

$TEXT['start-text1']="Now you can start using Apache and Co. Firstly you should try »Status« on the left navigation to make sure everything works fine.";

$TEXT['start-text2']="After testing you may take a look at the examples below the test link.";

$TEXT['start-text3']="If you want to start programming PHP or Perl (or whatever ;) please take a look at the <a target=extern href=http://www.apachefriends.org/lampp-en.html>XAMPP manual</a> first and get more information about your XAMPP installation.";

$TEXT['start-text4']="Good luck,<br>Kai \"Oswald\" Seidler + Kay Vogelgesang";

// ---------------------------------------------------------------------
// MANUALS
// ---------------------------------------------------------------------

$TEXT['manuals-head']="Online documentation";

$TEXT['manuals-text1']="XAMPP combines many different sofware packages into one packet. Here's a list of standard and reference documentation of the most important packages.";


$TEXT['manuals-list1']="
<ul>
<li><a href=http://httpd.apache.org/docs-2.0/>Apache 2 documentation</a>
<li><a href=http://www.php.net/manual/en/>PHP <b>referenz </b>documentation</a>
<li><a href=http://www.perldoc.com/perl5.8.0/pod/perl.html>Perl documentation</a>
<li><a href=http://www.mysql.com/documentation/mysql/bychapter/>MySQL documentation</a>
<li><a href=http://proftpd.linux.co.uk/localsite/Userguide/linked/userguide.html>ProFTPD user guide</a>
<li><a href=http://www.ros.co.nz/pdf/readme.pdf>pdf class documentation</a>
</ul>";

$TEXT['manuals-text2']="And a small list of tutorials and the Apache Friends documentation page:";

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

$TEXT['components-head']="XAMPP components";

$TEXT['components-text1']="XAMPP combines many different sofware packages into one packet. Here's an overview over all packages.";

$TEXT['components-text2']="Many thanks to the developers of these programs.";

$TEXT['components-text3']="In the directory <b>/opt/lampp/licenses</b> you will find all licenses and README files of these programs.";

// ---------------------------------------------------------------------
// CD COLLECTION DEMO
// ---------------------------------------------------------------------

$TEXT['cds-head']="CD Collection (Example for PHP+MySQL+PDF Class)";
$TEXT['cds-head-fpdf']="CD Collection (Example for PHP+MySQL+FPDF)";

$TEXT['cds-text1']="A very simple CD programm.";

$TEXT['cds-text2']="CD list as <a href='$PHP_SELF?action=getpdf'>PDF document</a>.";

$TEXT['cds-error']="Could not connect to database!<br>Is MySQL running or did you change the password?";
$TEXT['cds-head1']="My CDs";
$TEXT['cds-attrib1']="Artist";
$TEXT['cds-attrib2']="Title";
$TEXT['cds-attrib3']="Year";
$TEXT['cds-attrib4']="Command";
$TEXT['cds-sure']="Sure?";
$TEXT['cds-head2']="Add CD";
$TEXT['cds-button1']="DELETE CD";
$TEXT['cds-button2']="ADD CD";

// ---------------------------------------------------------------------
// BIORHYTHM DEMO
// ---------------------------------------------------------------------

$TEXT['bio-head']="Biorhythm (Example for PHP+GD)";

$TEXT['bio-by']="by";
$TEXT['bio-ask']="Please enter your date of birth";
$TEXT['bio-ok']="OK";
$TEXT['bio-error1']="Date";
$TEXT['bio-error2']="is invalid";

$TEXT['bio-birthday']="Birthday";
$TEXT['bio-today']="Today";
$TEXT['bio-intellectual']="Intellectual";
$TEXT['bio-emotional']="Emotional";
$TEXT['bio-physical']="Physical";

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
// ABOUT
// ---------------------------------------------------------------------

$TEXT['about-head']="About XAMPP";

$TEXT['about-subhead1']="Idea and realisation";

$TEXT['about-subhead2']="Design";

$TEXT['about-subhead3']="Collaboration";

$TEXT['about-subhead4']="Contact persons";


?>
