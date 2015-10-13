#Шаблон symfony проекта#

##Технологии##
* php-5.6
* symfony-2.7
* mysql-5.5
* phing

##Сборка проекта##

```
#!bash

cd application
#Сборка dev окружения
php phing.phar
#Сборка prod окружения
php phing.phar -Denv=prod
```
