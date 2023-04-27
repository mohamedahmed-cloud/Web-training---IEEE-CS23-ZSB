#!/bin/bash

for i in {1..6}
do
    touch "$i.$(echo {one,two,three,four,five,six} | cut -d " " -f $i).php"
done