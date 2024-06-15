BEGIN{print "<html><table border="2px">"; print "<tr><th align=""center"">Team</th><th align=""center"">Played</th><th align=""center"">Wins</th><th align=""center"">Tied</th><th align=""center"">Points</th></tr>";}

//{print "<tr><td align=""center"">"$1"</td><td align=""center"">"$2"</td><td align=""center"">"$3"</td><td align=""center"">"$4"</td><td align=""center"">"$3*4+$4*2"</td></tr>"}

END{print "</table></html>";}
