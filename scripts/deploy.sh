rsync -azP --exclude=.git --exclude=.gitignore --exclude=`git -C src ls-files --exclude-standard -oi --directory` ./src/ root@hobel:/var/www/bubakf

echo 'Deployment complete'
