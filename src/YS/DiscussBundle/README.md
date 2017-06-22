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
##### 6. Add routing to routing.yml
```
ys_discuss_bundle:
    resource: "@YSDiscussBundle/Resources/config/routing.yml"
    prefix:   /discuss
```
##### 7. Add to config.yml
```
ivory_ck_editor:
    configs:
        my_config:
            toolbar: [ ["Source", "-", "Maximize"] ]
            uiColor: "#000000"
```
##### 8. Install assets
```
bin/console assets:install
```