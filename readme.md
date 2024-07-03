# Frank Verhoeven Coding Standard

Set of PHP_CodeSniffer rules, heavily based on the Doctrine Coding Standard.

## Install
Install the package with composer:
```bash
composer require frankverhoeven/coding-standard --dev
```

## Configure
Add the ruleset to your `phpcs.xml.dist` file:
```xml
<?xml version="1.0" encoding="UTF-8"?>
<ruleset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="vendor/squizlabs/php_codesniffer/phpcs.xsd"
>
    <arg name="basepath" value="."/>
    <arg name="cache" value=".phpcs-cache"/>
    <arg name="colors"/>
    <arg name="extensions" value="php"/>
    <arg name="parallel" value="80"/>
    <arg value="sp"/>

    <file>src</file>
    <file>tests</file>

    <rule ref="FrankVerhoeven"/>
</ruleset>
```
