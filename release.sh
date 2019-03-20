#!/bin/bash
yarn run build
rsync -avr --delete-after . root@118.24.213.231:/root/site/ykfz.pw