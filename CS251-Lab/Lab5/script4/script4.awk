BEGIN{print "Team	Played	Wins	Tied	Points";}
//{
p=$3*4+$4*2
print $1"\t"$2"\t"$3"\t"$4"\t"p
}
