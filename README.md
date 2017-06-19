YSDiscussBundle
============

Inside YSUserBundle, IvoryCKEditorBundle.

##### 1. Add to parameters.yml
```
parameters:
    database_host: 172.18.0.1
    database_port: null
    database_name: ysblogbundle
    database_user: root
    database_password: root
    mailer_transport: smtp
    mailer_host: 127.0.0.1
    mailer_user: yaroslav.solokha@gmail.com
    mailer_password: null
    secret: 8ed60d15706d13261ee6705544edc13db3b61711
    facebook_client_id: xxx
    facebook_client_secret: xxx
    google_client_id: xxx
    google_client_secret: xxx
```
##### 2. Create DB
```
$ bin/console doctrine:database:create
```
##### 3. Add to your composer:
```
"require": {
    ...
    "ys/user-bundle" : "dev-master",
    "sonata-project/user-bundle": "dev-add_support_for_fos_user2",
    "egeloen/ckeditor-bundle": "^5.0"
},
"repositories" : [
...
{
    "type" : "vcs",
    "url" : "https://github.com/yaroslavsolokha/YSUserBundle.git"
}],
```
##### 4. Composer update
```
$ cd server
$ docker exec -it php /bin/sh
$ cc ysblogbundle
$ composer update
```
##### 5. Setup YSUserBundle - https://github.com/yaroslavsolokha/YSUserBundle
##### 6. Add to AppKernel.php
```
 $bundles = [
     ...
     new YS\DiscussBundle\YSDiscussBundle(),
     new Ivory\CKEditorBundle\IvoryCKEditorBundle()
```
##### 7. Create schema
```
$ bin/console doctrine:schema:create
```
##### 8. Add import to config.yml
```
imports:
    ...
    - { resource: "@YSBlogBundle/Resources/config/config.yml" }
```
        

