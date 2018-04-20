# Drupal Console Extend Example

This project contains instructions and sample code to extend Drupal Console adding commands using a standard package/library.

### Install on a site:
```
cd /path/to/drupal/

composer require drupal/console-extend-example
```

### Install globally:
```
cd ~/.console/extend/

composer require drupal/console-extend-example
```

Now you can find your command (extend:example:one) in the list of available commands:
```
drupal list extend

Available commands for the "extend" namespace:
  extend:example:one        Drupal Console extend example
```

To execute the example command, run
```
drupal extend:example:one
```

* For more information about adding commands globally [Drupal Console Extend](https://github.com/hechoendrupal/drupal-console-extend#drupal-console-extend)

### Conventions to follow
* Composer package type must be declared as `drupal-console-library`.   
* Command registration must be done using the `console.services.yml` file at package root.
* Service definition should done by tagging services as `drupal.command`.
