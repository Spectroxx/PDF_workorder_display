#!/bin/sh
#Updates PDF Display

cd tmp/
git clone https://github.com/Spectroxx/pdf-display.git
rsync -a --exclude={'pdf-display/resources/*','pdf-display/README.md','pdf-display/LICENSE','pdf-display/.git/'} pdf-display/* ~/pdf.glavin.net/dev 
#rm -rf tmp/pdf-display/
cd