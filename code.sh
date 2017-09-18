#!/bin/sh

var=$(cat /dev/urandom | tr -dc '0-10' | fold -w 4 | head -n 1)
var2=$(cat /dev/urandom | tr -dc 'X''Y' | fold -w 2 | head -n 1)
data="$((2017))$((RANDOM%12+1))$((RANDOM%28+1))$((RANDOM%23+1))$((RANDOM%59+1))$((RANDOM%59+1))"

string=$data$var$var2
echo $string

FILE="./script.txt"

/bin/cat << EOM >> $FILE
$string
EOM
