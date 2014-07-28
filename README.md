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

Installation is done through composer. In your `composer.json` file, you should add the following lines to the repositories
section:

```json
{
    "name": "cta-platform/footer",
    "type": "vcs",
    "url": "https://git.assembla.com/cta-platform.footer.git"
}
```

The require section should contain the following line:

```json
    "cta-platform/footer": "1.*.*",
```

Afterward, just run `composer update` from the root of your Joomla project.

### jsymlinker

Another option, currently only available for Moyo developers, is by using the jsymlink script from the [Moyo Git
Tools](https://github.com/derjoachim/moyo-git-tools).

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
