# rsync -avz --filter=':- .gitignore' . root@hobel:/var/www/rsynctest
rsync -azP --exclude=.git --exclude=.gitignore --exclude=`git -C . ls-files --exclude-standard -oi --directory` . root@hobel:/var/www/rsynctest

echo 'Deployment complete'
