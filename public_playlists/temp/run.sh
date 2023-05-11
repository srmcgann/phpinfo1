!/bin/bash
cat temp.zip.001 > file.zip
cat temp.zip.002 >> file.zip
cat temp.zip.003 >> file.zip
cat temp.zip.004 >> file.zip
cat temp.zip.005 >> file.zip
zip -F file.zip
echo "pw" | unzip file.zip
mv roadtrip-tracks ../roadtrip/tracks
