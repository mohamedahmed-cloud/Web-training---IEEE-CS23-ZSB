#!/bin/bash
for i in {1..7}; do touch "$i.$(echo $i | sed 's/1/one/;s/2/two/;s/3/three/;s/4/four/;s/5/five/;s/6/six/;s/7/seven/').php"; done