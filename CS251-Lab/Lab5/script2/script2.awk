BEGIN{{print "Id	Name"}FS="," 
RS="!"}
//{
print NR"\t"$2
}
END{print NR,"Records merged"}
