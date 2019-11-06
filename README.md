# Collection
> 项目中使用laravel collection需要引入很多额外的包,所以基于laravel collection复制出一个独立的collection



## 安装方式1
> 创建composer.json文件,并写入以下内容:

```php
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/qq1060656096/collection.git"
        }
    ],
    "require": {
        "zwei/collection": "0.0.1"
    }
}
```
> 执行composer install


## 安装方式2
```sh
composer require "zwei/collection:0.0.1"
```


### 单元测试使用
php vendor/phpunit/phpunit/phpunit --bootstrap vendor/autoload.php tests
