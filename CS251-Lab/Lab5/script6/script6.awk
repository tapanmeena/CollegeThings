BEGIN{wcount=0;ccount=0;pcount=0;count=0}
//{
wcount=wcount+NF;
if(NF==0 && count==0)
{
pcount++
count=1;
}
else {
count =0;
for(i=1;i<=NF;i++)
{
ccount=ccount+length($i)
}
}
}
END{print "Number of Characters:"ccount"\t""Number of Words:"wcount"\t""Number of Lines:"NR"\t""Number of Paragraphs:"pcount}
