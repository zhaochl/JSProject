#!/opt/lampp/bin/perl

#    Copyright (C) 2002/2003 Kai Seidler, oswald@apachefriends.org
#
#    This program is free software; you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation; either version 2 of the License, or
#    (at your option) any later version.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.
#
#    You should have received a copy of the GNU General Public License
#    along with this program; if not, write to the Free Software
#    Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.


use CGI;

$form=new CGI;

$f_name=CGI::escapeHTML($form->param("f_name"));
$f_email=CGI::escapeHTML($form->param("f_email"));
$f_text=CGI::escapeHTML($form->param("f_text"));

print "Content-Type: text/html\n\n";

if($f_name)
{
	open (FILE, ">>guestbook.dat") or die ("No se puede abrir el fichero del Libro de Visitas");
	print FILE localtime()."\n";
	print FILE "$f_name\n";
	print FILE "$f_email\n";
	print FILE "$f_text\n";
	print FILE "·\n";
	close(FILE);
}

print '<html>';
print '<head>';
print '<meta name="author" content="Kai Oswald Seidler">';
print '<link href="xampp.css" rel="stylesheet" type="text/css">';
print '</head>';

print '<body>';
print '&nbsp;<p>';

print "<h1>Libro de Visitas (Ejemplo de Perl)</h1>";

print "Un clasico y simple Libro de Visitas!";

open (FILE, "<guestbook.dat") or die ("No se puede abrir el fichero del Libro de Visitas");

while(!eof(FILE)){
	chomp($date=<FILE>);
	chomp($name=<FILE>);
	chomp($email=<FILE>);

	print "<p class=small>$date";
	print "<table border=0 cellpadding=4 cellspacing=1>";	
	print "<tr><td class=h>";
	print "<img src=img/blank.gif width=250 height=1><br>";
	print "Nombre: $name";
	print "</td><td class=h>";
	print "<img src=img/blank.gif width=250 height=1><br>";
	print "E-Mail: $email";
	print "</td></tr>";
	print "<tr><td class=d colspan=2>";
	while(1==1){
		chomp($line=<FILE>);
		if($line eq '·') {
			last;
		}
		print "$line<br>";
	}
	print "</td></tr>";
	print "</table>";
}
close (FILE);

print "<p>Añadir";

print "<form action=guestbook-es.pl method=get>";
print "<table border=0 cellpadding=0 cellspacing=0>";
print "<tr><td>Nombre:</td><td><input type=text size=30 name=f_name></td></tr>";
print "<tr><td>E-Mail:</td><td> <input type=text size=30 name=f_email></td></tr>";
print "<tr><td>Texto:</td><td> <textarea type=text rows=3 cols=30 name=f_text></textarea></td></tr>";
print "<tr><td></td><td><input type=submit border=0 value=\"GRABAR\"></td></tr>";
print "</table>";
print "</form>";


print "</body>";
print "</html>";
