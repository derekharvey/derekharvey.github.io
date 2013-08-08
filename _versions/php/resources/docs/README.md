# Production release notes.

## /var/git/lotsofcode.com.git/hooks/post-receive 

Checks out the code to the working directory.
/var/www/lotsofcode.com/www/

## /var/www/lotsofcode.com/release.sh

Invoked by the post-receive hook and checks out the code and any dependencies via composer into /var/www/lotsofcode.com/www/