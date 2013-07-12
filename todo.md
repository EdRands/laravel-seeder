# Todos After Seeding Project

+ If using nginx, modify nginx-server.conf, make sure it's included, then reload nginx
 + Change `server_name`, `access_log`, `error_log`, `root`
+ Add server_name to operating system's hosts file
 + Windows 7: `%systemroot%\System32\drivers\etc\hosts` (requires administration privileges)
+ Customize NetBeans IDE project
 + Change the project name in nbproject/project.xml at Project > Configuration > Name
 + Customize the project properties
+ Customize readme.md
 + A starting point is at the end of the current readme.md; just delete the top part about the seed and Laravel
+ Change license (if applicable) in license file and composer.json
+ Change name, description and keywords in composer.json to match this project
+ Add machine name to development environment in bootstrap/start.php
+ Customize configuration in app/config/*
+ Customize test setup
 + Update url in `app/tests/acceptance.suite.yml`
+ Delete this todo.md file