#!/usr/bin/perl

use strict;
use warnings;
use diagnostics;

print "Content-type:text/html\n\n";
print '<html>';
print '<head>';
print '<title>Hello Word - First CGI Program</title>';
print '</head>';
print '<body>';


print '<h1>Enter your name</h1>';
print '<FORM action="RandomRaffle.cgi" method="GET">';
print 'Your name: <input type="text" name="player_name">  <br>';
print '<input type="submit" value="Add to raffle">';
print '</FORM>';


print '<div style="float:left">';
	my @name = split(/=/,$ENV{'QUERY_STRING'});
	my $inputname = $name[1];
	
        if($inputname =~ /\w/)
        {
		open(DATAO,">> /home/purduelo/public_html/cgi-bin/rafflenames.txt") or die $!;
		flock(DATAO,2);
		print DATAO "$inputname\n";
		close DATAO;
	}

open(DATAO,"/home/purduelo/public_html/cgi-bin/rafflenames.txt");
flock(DATAO,1);
my @names;
while(my $line = <DATAO>)
{
	if($line =~ /\+/)
	{
		my @hold = split(/\+/,$line);
		$line = join(' ',@hold);
	}
	if(!($line ~~ @names))
	{
		push(@names,$line);
	}
}

print "<h3>Rafflees:</h3>";

foreach(@names)
{
	print "<p style='display:inline'>$_</p><br>";
}

my $randnum = rand($#names+1);
close DATAO;
print '</div>';

print '<div style="float:right;width:50%">';
print '<button onclick="document.getElementById(\'rafflewin\').style.display=\'block\';">Click to get your raffle winner :)</button>';
print '<button onclick="location.reload(true);">Reset the Raffle!</button>';
print "<br><h1 id=\"rafflewin\" style=\"display:none\">$names[$randnum]</h1><br>";
print '</div>';
print '</body>';
print '</html>';