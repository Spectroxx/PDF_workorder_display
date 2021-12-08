#!/bin/sh
#Updates PDF Display

git clone https://github.com/Spectroxx/pdf-display.git ~/pdf.glavin.net/tmp
rsync -a --exclude={'pdf-display/resources/*','pdf-display/README.md','pdf-display/LICENSE','pdf-display/.git/'} ~/pdf.glavin.net/tmp/pdf-display/* ~/pdf.glavin.net/
#rm -rf tmp/pdf-display/
#TEST