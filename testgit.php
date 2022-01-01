<?php
$teststr = 'test from php';
system('cd /var/www/html/githubio/mtzhiro.github.io/');
system('/usr/bin/git add --all');
system('/usr/bin/git commit -m "' . $teststr . '"');
system('/usr/bin/git push origin master');
/*
[master 2662f55] test from php Committer: Apache Your name and email address were configured automatically based on your username and hostname. Please check that they are accurate. You can suppress this message by setting them explicitly: git config --global user.name "Your Name" git config --global user.email you@example.com After doing this, you may fix the identity used for this commit with: git commit --amend --reset-author 4 files changed, 32 insertions(+), 8 deletions(-) create mode 100644 testgit.php create mode 100644 testgit.php~
*/
