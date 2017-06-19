YSDiscussBundle
=======
Documentation for internal settings for bundle.
Inside - YSUserBundle, IvoryCKEditorBundle.

#### Setup
##### 1. Add to your composer:
```
"require": {
    ...
    "ys/discuss-bundle" : "dev-master"
},
"repositories" : [
...
{
    "type" : "vcs",
    "url" : "https://github.com/yaroslavsolokha/YSDiscussBundle.git"
}],
```
##### 2. Composer update
```
$ cd server
$ docker exec -it php /bin/sh
$ cc ysdiscussbundle
$ composer update 
```
##### 3. Setup YSUserBundle - https://github.com/yaroslavsolokha/YSUserBundle
##### 4. Add to AppKernel.php
```
 $bundles = [
     ...
     new YS\DiscussBundle\YSDiscussBundle(),
     new Ivory\CKEditorBundle\IvoryCKEditorBundle()
 ];
```
##### 5. Update schema
```
$ bin/console doctrine:schema:update
```
##### 6. Add import to config.yml
```
imports:
    ...
    - { resource: "@YSBlogBundle/Resources/config/config.yml" }
```