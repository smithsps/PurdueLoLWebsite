#!/usr/bin/perl

print "Content-type:text/html\n\n";
print '<html>';
print '<head>';
print '<title>Hello Word - First CGI Program</title>';
print '</head>';
print '<body>';

my $curl = `curl -k https://na.api.pvp.net/api/lol/static-data/na/v1.2/champion?api_key=02944942-d70a-4bd7-a210-6f81c5a88c2c`;

my @champions;
my @champlist;
my @used;
my $total = 0;
my $i = 1;
my $j = 0;

while($curl =~ /\"key\":\"(\w+)\"/)
{
    push(@champions,$1);
    $curl =~ s/\"key\":\"(\w+)\"//;
    $total++;
}

my @numbah = split('=',$ENV{'QUERY_STRING'});
chomp(@numbah);

for(1..$numbah[1])
{
    $j = 0;
    my $id = int(rand($total)); 
 
   foreach(@used)
    {
	if($id == $_)
	{
	    $j = 1;
	}
    }	    
  
    if($j == 1)
    {
       redo;
    }
    push(@champlist,$champions[$id]);
    push(@used,$id);
}

foreach(@champlist)
{
    print "<h4>Champion $i: $_</h4>";
    $i++;
}

print '</body>';
print '</html>';