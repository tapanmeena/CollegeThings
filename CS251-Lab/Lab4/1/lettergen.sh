#!/bin/bash
z=$9
x=$1
y=$2
p=$3
q=$4
r=$5
a=$6
b=$7
d=$8
sed -e "s/\<X\>/$x/g;
s/\<Y\>/$y/g;
s/\<P\>/$p/g; 
s/\<Q\>/$q/g; 
s/\<R\>/$r/g; 
s/\<A\>/$a/g;
s/\<B\>/$b/g;
s/\<D\>/$d/g" $z
