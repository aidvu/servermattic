#!/bin/bash
mkdir -p /var/www
cd /var/www
wget https://wordpress.org/latest.zip
apt-get install unzip
unzip latest.zip
rm -f latest.zip
