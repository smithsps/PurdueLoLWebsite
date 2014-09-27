#!/usr/bin/perl

print "Content-type:text/html\n\n";
print '<html>';
print '<head>';
print '<title>Randomizer</title>';
print '</head>';
print '<body>';
print '<h2>Randomizer: Get random champions!</h2>';

print '<FORM action="displayChamps.cgi" method="GET">';
print '# Of Champions: <input type="text" name="champ_num">  <br>';
print '<input type="submit" value="Submit">';
print '</FORM>';

print '</body>';
print '</html>';