#!/bin/sh
group=everyone

sudo chgrp -R $group storage bootstrap/cache database/dumps
sudo chmod -R ugo+rwx storage bootstrap/cache database/dumps
sudo chgrp -R $group .
sudo chmod -R g+rwX .
sudo find . -type d -exec chmod g+s '{}' +
