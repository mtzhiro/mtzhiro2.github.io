<?php
$teststr = 'test from php';
system('cd /var/www/html/githubio/mtzhiro.github.io/');
system('/usr/bin/git add --all');
system('/usr/bin/git commit -m "' . $teststr . '"');
system('/usr/bin/git push origin master');