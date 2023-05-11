<?php
//chdir("public_playlists/temp");
echo shell_exec("wget https://www.dropbox.com/s/jxxdqvyfjsbc7a3/temp.zip.001?raw=1 -O temp.zip.001") . "\n";
echo shell_exec("wget https://www.dropbox.com/s/07gzev10vtctk6g/temp.zip.002?raw=1 -O temp.zip.002") . "\n";
echo shell_exec("wget https://www.dropbox.com/s/p588lmnqxnyfp3f/temp.zip.003?raw=1 -O temp.zip.003") . "\n";
echo shell_exec("wget https://www.dropbox.com/s/3ys4t6jckwep3fo/temp.zip.004?raw=1 -O temp.zip.004") . "\n";
echo shell_exec("wget https://www.dropbox.com/s/wu0t9niyz8d178q/temp.zip.005?raw=1 -O temp.zip.005") . "\n\n\n";
echo "...backgrounding zip operation.. \n\n";
echo shell_exec("screen -d -m ./run.sh") . "\n";
?>
