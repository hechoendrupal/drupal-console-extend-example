# Drupal Console extend

This project contains instructions and sample code to extend Drupal Console adding commands using a standard package/library.

### Install your package:
```
cd /path/to/drupal/

composer require your/package
```

### Conventions
* Package type must be declared as `drupal-console-library`.   
* Register commands using the `console.services.yml` file at package root.
* Service definition should be tagged as `drupal.command`.
