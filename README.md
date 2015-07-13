# mod_bottom

## Description

Unified footer module for several [CTA](http://cta.int/) websites. This module is one step towards a unified look and feel for all CTA websites.
It has a number of generic elements that are configurable per site.

This module was developed by [Moyo Web Architects](http://moyoweb.nl).


## Requirements

* Joomla 3.X . Untested in Joomla 2.5, but it might work OOTB.
* Koowa 0.9 or 1.0 (as yet, Koowa 2 is not supported)
* PHP 5.3.10 or better

## Installation

### Composer

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories section:

from the local repository;

```json
{
    "name": "moyo/footer",
    "type": "vcs",
    "url": "https://github.com/kedweber/mod_footer.git"
}
```

or from the original purveyor's repository;  

```json
{
    "name": "moyo/footer",
    "type": "vcs",
    "url": "https://github.com/moyoweb/mod_footer.git"
}
```

The require section should contain the following line:

```json
    "moyo/mod_footer": "1.*.*",
```

Original dead resting place: https://git.assembla.com/cta-platform.footer.git


Afterwards, one just needs to run the command `composer update` from the root of your Joomla project. This will 
effectively create a `composer.lock` file which will contain the collected dependencies and the hash codes for 
each latest release \(depending on the require section's format\) for each particular repo. Should installations 
problems occur due to a bad ordering of the dependencies, one may need to go into the lock file and manualy change 
the order of the components. Running `composer update` again will again cause a reordering of the lock file, beware of 
this factor when running an update. Thereafter, you can run the command `composer install`. 

If you have not setup an alias to use the command composer, then you will need to replace the word composer in the previous commands with the 
commands with `php composer.phar` followed by the desired action \(eg. update or install\).

### jsymlinker

Another option is to run the [jsymlink script](https://github.com/derjoachim/moyo-git-tools) in the root folder, available via the original Moyo developer, Joachim van de Haterd's repository, under 
the [Moyo Git Tools](https://github.com/derjoachim/moyo-git-tools).

#### License jsymlinker

The joomlatools/installer plugin is free and open-source software licensed under the [GPLv3 license](https://github.com/derjoachim/joomla-composer/blob/develop/gplv3-license).



## Configuration

The module type is simply named 'bottom'. The following tabs are configurable:

* **Contact options**: Column in which contact data are saved.
    * **Header**: Header to be displayed
    * **Content**: Content to be displayed
* **Visiting options**:
    * **Content**: Content to be displayed
* **Follow options**: Configuration of social media to display
    * **Follow** Toggles following options. If off, this part of the module will not be displayed.
* **Newsletter options**: Configuration of newsletter display options
* **Copyright options**: Configuration of copyright options
    * **Header**: Header to be displayed
    * **Content**: Content to be displayed
* **Logo options** :
    * **Logo**: Toggles display of logo in the footer
    * **Up**: Toggles display of an arrow in the footer that redirects to the top of the page
