#!/bin/sh
#Updates PDF Display

git clone https://github.com/Spectroxx/pdf-display.git home2/glavin/tmp/
rsync -a --exclude={'pdf-display/resources/*','pdf-display/README.md','pdf-display/LICENSE','pdf-display/.git/'} home2/glavin/tmp/pdf-display/* ~/pdf.glavin.net/
#rm -rf tmp/pdf-display/
#TEST