#!/bin/sh
#Updates PDF Display

cd tmp/
git clone https://github.com/Spectroxx/pdf-display.git
rsync -av pdf-display/* ~/pdf.glavin.net/ 
cd