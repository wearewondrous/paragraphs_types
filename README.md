# Paragraphs types collection

![Build status](https://travis-ci.org/WondrousLLC/paragraphs_types.svg?branch=master)

## Basics

- Highly experimental, do not use in production
- Only for Drupal 8, there will be no backport
- Currently does not work together with paragraphs demo because of naming collissions

## Installation

At the Moment only Drupal Composer projects are supported. Please see the documentation here:
[Using Composer to install Drupal packages through Drupal.org](https://www.drupal.org/node/2718229)

To install this module 4 libraries are needed.
- dropzone
- imagesloaded
- masonry
- photoswipe

Just add the following to your composer.json file:

```
{
  "type": "package",
  "package": {
    "name": "enyo/dropzone",
    "version": "4.3.0",
    "type": "drupal-library",
    "dist": {
      "url": "https://github.com/enyo/dropzone/archive/v4.3.0.zip",
      "type": "zip"
    }
  }
},
{
  "type": "package",
  "package": {
    "name": "desandro/imagesloaded",
    "version": "3.2.0",
    "type": "drupal-library",
    "dist": {
      "url": "https://github.com/desandro/imagesloaded/archive/v3.2.0.zip",
      "type": "zip"
    }
  }
},
{
  "type": "package",
  "package": {
    "name": "desandro/masonry",
    "version": "3.3.2",
    "type": "drupal-library",
    "dist": {
      "url": "https://github.com/desandro/masonry/archive/v3.3.2.zip",
      "type": "zip"
    }
},
{
  "type": "package",
  "package": {
    "name": "dimsemenov/photoswipe",
    "version": "4.1.1",
    "type": "drupal-library",
    "dist": {
      "url": "https://github.com/dimsemenov/PhotoSwipe/archive/v4.1.1.zip",
      "type": "zip"
    }
  }
}
```

then add this git repository:

```
{
  "type": "vcs",
  "url": "https://github.com/WondrousLLC/paragraph_types"
}
```

Be sure to have the installer path for libraries set

```
"web/libraries/{$name}": [
    "type:drupal-library"
]
```

To install the libraries via composer then type
composer require enyo/dropzone desandro/imagesloaded desandro/masonry dimsemenov/photoswipe

To install the module run
composer require drupal/paragraphs_types