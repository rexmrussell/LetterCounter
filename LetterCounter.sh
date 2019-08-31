#!/bin/bash

clear
read -p "Please enter a word: " Xword;
length=(${#Xword});
for (( i=0; $i<$length; i++ )); do
echo ${Xword:$i:1};
done|sort|uniq -c|sort -n
