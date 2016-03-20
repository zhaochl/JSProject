<?
// ---------------------------------------------------------------------
// GLOBAL
// ---------------------------------------------------------------------

$TEXT['global-xampp']="XAMPP para Linux";
$TEXT['global-showcode']="Mostrar el codigo fuente";
$TEXT['global-sourcecode']="Codigo fuente";

// ---------------------------------------------------------------------
// NAVIGATION
// ---------------------------------------------------------------------

$TEXT['navi-xampp']="XAMPP";
$TEXT['navi-welcome']="Bienvenido";
$TEXT['navi-status']="Status";
$TEXT['navi-security']="Seguridad";
$TEXT['navi-doc']="Documentacion";
$TEXT['navi-components']="Componentes";
$TEXT['navi-about']="Acerca de XAMPP";

$TEXT['navi-demos']="Demos";
$TEXT['navi-cdcol']="Coleccion de CD's";
$TEXT['navi-bio']="Biorritmos";
$TEXT['navi-guest']="Libro de Visitas";
$TEXT['navi-iart']="Instant Art";
$TEXT['navi-iart2']="Flash Art";
$TEXT['navi-phonebook']="Lista de Telefonos";

$TEXT['navi-tools']="Herramientas";
$TEXT['navi-phpmyadmin']="phpMyAdmin";
$TEXT['navi-webalizer']="webalizer";
$TEXT['navi-phpsqliteadmin']="phpSQLiteAdmin";

$TEXT['navi-languages']="Lenguajes";

// ---------------------------------------------------------------------
// STATUS
// ---------------------------------------------------------------------

$TEXT['status-head']="XAMPP Status";
$TEXT['status-text1']="Esta pagina ofrece de un vistazo la informacion de los programas que esta ejecutandose y funcionando.";
$TEXT['status-text2']="Algunos cambios en la configuracion pueden causar falsos informes de estado negativos.";
$TEXT['status-mysql']="MySQL database";
$TEXT['status-php']="PHP";
$TEXT['status-perl']="Perl";
$TEXT['status-cgi']="Common Gateway Interface (CGI)";
$TEXT['status-ssi']="Server Side Includes (SSI)";
$TEXT['status-mmcache']="PHP extension »eAccelerator«";
$TEXT['status-mmcache-url']="http://www.apachefriends.org/faq-lampp-en.html#mmcache";
$TEXT['status-oci8']="PHP extension »OCI8/Oracle«";
$TEXT['status-oci8-url']="http://www.apachefriends.org/faq-lampp-en.html#oci8";

$TEXT['status-lookfaq']="ver FAQ";
$TEXT['status-ok']="ACTIVADO";
$TEXT['status-nok']="DESACTIVADO";

$TEXT['status-tab1']="Componente";
$TEXT['status-tab2']="Status";
$TEXT['status-tab3']="Sugerencia";

// ---------------------------------------------------------------------
// SECURITY
// ---------------------------------------------------------------------

$TEXT['security-head']="XAMPP seguridad";
$TEXT['security-text1']="Esta pagina muestra una rapida vista del estado de seguridad de su instalacion de XAMPP. (Por favor continua leyendo lo que sigue despues de esta tabla.)";
$TEXT['security-text2']="Los programas marcados en verde son seguros; los programas marcados en rojo son inseguros y los programas marcados en amarillo no han podido ser comprobados (porque el software a comprobar no se esta ejecutando, por ejemplo).<p>Para corregir o cerrar todos estos problemas de seguridad simplemente ejecuta:<p><b>/opt/lampp/lampp security</b><p>Esto arrancara un programa interactivo.";
$TEXT['security-ok']="SEGURO";
$TEXT['security-nok']="INSEGURO";
$TEXT['security-noidea']="DESCONOCIDO";

$TEXT['security-tab1']="Descripcion";
$TEXT['security-tab2']="Status";

$TEXT['security-checkapache-nok']="Estas paginas de XAMPP estan accesibles en red para cualquiera";
$TEXT['security-checkapache-ok']="Estas paginas de AMPP ya NO estan accesibles en red para cualquiera";
$TEXT['security-checkapache-text']="Cada pagina de demo XAMPP de las que estas accediendo ahora mismo esta disponible para cualquiera en la red. Cualquiera que sepa tu direccion IP puede verlas.";

$TEXT['security-checkmysqlport-nok']="MySQL es accesible a traves de la red";
$TEXT['security-checkmysqlport-ok']="MySQL ya NO esta accesible en red";
$TEXT['security-checkmysqlport-text']="Este es un potencial o, al menos teoricamente, fallo de seguridad. Si eres paranoico respecto a la seguridad, deberias deshabilitar la interface de red de MySQL.";
$TEXT['security-checkpmamysqluser-nok']="El usuario de phpMyAdmin pma NO tiene contraseña";
$TEXT['security-checkpmamysqluser-ok']="El usuario de phpMyAdmin pma tiene contraseña";
$TEXT['security-checkpmamysqluser-text']="phpMyAdmin guarda tus preferencias en una base de datos MySQL extra. Para acceder a estos datos phpMyAdmin usa el usuario especial 'pma'. Este usuario no tiene contraseña en la instalacion por defecto, para evitar cualquier problema de seguridad deberias ponerle una.";
$TEXT['security-checkmysql-nok']="El usuario de MySQL root NO tiene contraseña";
$TEXT['security-checkmysql-ok']="El usuario de MySQL root tiene contraseña";
$TEXT['security-checkmysql-text']="Cualquier usuario local de este equipo puede acceder a tu base de datos MySQL con privilegios de administrador. Deberias poner una contraseña.";
$TEXT['security-checkftppassword-nok']="La contraseña del usuario FTP nobody todavia es 'lampp'";
$TEXT['security-checkftppassword-ok']="La contraseña del usuario FTP nobody ya no es 'lampp'";
$TEXT['security-checkftppassword-text']="Usando la contraseña por defecto para el usuario FTP nobody cualquiera puede subir y cambiar ficheros en tu servidor web XAMPP. Si activas ProFTPD debes poner una nueva contraseña al usuario nobody.";
// ---------------------------------------------------------------------
// START
// ---------------------------------------------------------------------

$TEXT['start-head']="Bienvenido a XAMPP para Linux";

$TEXT['start-subhead']="Enhorabuena:<br>Has instalado con exito XAMPP en este sistema!";

$TEXT['start-text1']="Ya puedes comenzar a utilizar Apache y Cia. Primeramente deberias pulsar »Status« en el panel de navegacion izquierdo para asegurarte de que todo funciona correctamente.";

$TEXT['start-text2']="Despues de comprobarlo, puedes echar un vistazo a los ejemplos que hay debajo del titulo Demos.";

$TEXT['start-text3']="Si quieres comenzar a programar en PHP o en Perl (u otro ) ; por favor echa un vistazo en <a target=extern href=http://www.apachefriends.org/lampp-en.html>XAMPP manual</a> primero e informate mas ampliamente sobre tu instalacion XAMPP.";

$TEXT['start-text4']="Buena suerte,<br>Kai \"Oswald\" Seidler + Kay Vogelgesang";

// ---------------------------------------------------------------------
// MANUALS
// ---------------------------------------------------------------------

$TEXT['manuals-head']="Documentacion en linea";

$TEXT['manuals-text1']="XAMPP combina muchos paquetes de software diferentes en uno solo. Esta es una lista de documentacion standard y de referencia de los mas importantes.";

$TEXT['manuals-list1']="
<ul>
<li><a href=http://httpd.apache.org/docs-2.0/>Apache 2 documentation</a>
<li><a href=http://www.php.net/manual/en/>PHP <b>referenz </b>documentation</a>
<li><a href=http://www.perldoc.com/perl5.8.0/pod/perl.html>Perl documentation</a>
<li><a href=http://www.mysql.com/documentation/mysql/bychapter/>MySQL documentation</a>
<li><a href=http://proftpd.linux.co.uk/localsite/Userguide/linked/userguide.html>ProFTPD user guide</a>
<li><a href=http://www.ros.co.nz/pdf/readme.pdf>pdf class documentation</a>
</ul>";

$TEXT['manuals-text2']="Y una pequeña lista de tutoriales y la pagina de documentacion de Apache Friends:";
$TEXT['manuals-list2']="
<ul>
<li><a href=http://www.apachefriends.org/faq-en.html>Apache Friends documentation</a>
<li><a href=http://www.freewebmasterhelp.com/tutorials/php>PHP Tutorial</a> by David Gowans
<li><a href=http://www.davesite.com/webstation/html/>HTML - An Interactive Tutorial For Beginners</a> by Dave Kristula
<li><a href=http://www.comp.leeds.ac.uk/Perl/start.html>Perl Tutorial</a> by Nik Silver
</ul>";

$TEXT['manuals-text3']="Buena suerte y diviertete! :)";

// ---------------------------------------------------------------------
// COMPONENTS
// ---------------------------------------------------------------------

$TEXT['components-head']="componentes de XAMPP";

$TEXT['components-text1']="XAMPP combina muchos paquetes de software diferente en uno solo. Esta es una vista general de todos los paquetes.";

$TEXT['components-text2']="Muchas gracias a los desarrolladores de estos programas.";


$TEXT['components-text3']="En el directorio <b>/opt/lampp/licenses</b> encontraras todas las licencias y ficheros README de estos programas.";

// ---------------------------------------------------------------------
// CD COLLECTION DEMO
// ---------------------------------------------------------------------

$TEXT['cds-head']="Coleccion de CD's (Ejemplo de PHP+MySQL+PDF Class)";
$TEXT['cds-head-fpdf']="Coleccion de CD's (Ejemplo de PHP+MySQL+FPDF)";

$TEXT['cds-text1']="Un sencillo programa de organizacion de CD's.";

$TEXT['cds-text2']="Lista de CD's en forma de <a href='$PHP_SELF?action=getpdf'>documento PDF</a>.";

$TEXT['cds-error']="No es posible conectar con la base de datos!<br>Esta ejecutandose MySQL o has cambiado la contraseña?";
$TEXT['cds-head1']="Mis CD's";
$TEXT['cds-attrib1']="Artista";
$TEXT['cds-attrib2']="Titulo";
$TEXT['cds-attrib3']="Año";
$TEXT['cds-attrib4']="Accion";
$TEXT['cds-sure']="Seguro?";
$TEXT['cds-head2']="Añadir CD";
$TEXT['cds-button1']="BORRAR CD";
$TEXT['cds-button2']="AÑADIR CD";

// ---------------------------------------------------------------------
// BIORHYTHM DEMO
// ---------------------------------------------------------------------

$TEXT['bio-head']="Biorritmos (Ejemplo de PHP+GD)";

$TEXT['bio-by']="by";
$TEXT['bio-ask']="Por favor entra tu fecha de nacimiento";
$TEXT['bio-ok']="OK";
$TEXT['bio-error1']="Fecha";
$TEXT['bio-error2']="incorrecta";

$TEXT['bio-birthday']="Nacimiento";
$TEXT['bio-today']="Hoy";
$TEXT['bio-intellectual']="Intelectual";
$TEXT['bio-emotional']="Emocional";
$TEXT['bio-physical']="Fisico";

// ---------------------------------------------------------------------
// INSTANT ART DEMO
// ---------------------------------------------------------------------

$TEXT['iart-head']="Instant Art (Ejemplo de PHP+GD+FreeType)";
$TEXT['iart-text1']="Font »AnkeCalligraph« by <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['iart-ok']="OK";

// ---------------------------------------------------------------------
// FLASH ART DEMO
// ---------------------------------------------------------------------

$TEXT['flash-head']="Flash Art (Ejemplo de PHP+MING)";
$TEXT['flash-text1']="Font »AnkeCalligraph« by <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['flash-ok']="OK";

// ---------------------------------------------------------------------
// PHONE BOOK DEMO
// ---------------------------------------------------------------------

$TEXT['phonebook-head']="Lista de Telefonos (Ejemplo de PHP+SQLite)";

$TEXT['phonebook-text1']="Un script muy simple que gestiona una Lista de Telefonos. Pero implementado con una tecnologia muy moderna y actual: SQLite, la base de datos SQL sin servidor.";

$TEXT['phonebook-error']="No se puede abrir la base de datos!";
$TEXT['phonebook-head1']="Mis numeros de telefono:";
$TEXT['phonebook-attrib1']="Apellido";
$TEXT['phonebook-attrib2']="Nombre";
$TEXT['phonebook-attrib3']="Telefono";
$TEXT['phonebook-attrib4']="Accion";
$TEXT['phonebook-sure']="Seguro?";
$TEXT['phonebook-head2']="Añadir numero";
$TEXT['phonebook-button1']="BORRAR";
$TEXT['phonebook-button2']="AÑADIR";

// ---------------------------------------------------------------------
// ABOUT
// ---------------------------------------------------------------------

$TEXT['about-head']="Sobre XAMPP";

$TEXT['about-subhead1']="Idea y realizacion";

$TEXT['about-subhead2']="Diseño";

$TEXT['about-subhead3']="Colaboracion";

$TEXT['about-subhead4']="Personas de contacto";


?>
