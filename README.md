# Paragraphs types collection

To install this module 3 libraries are needed.
- dropzone
- imagesloaded
- masonry

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
}
```

then add this git repository:
```
{
  "type": "vcs",
  "url": "https://github.com/WondrousLLC/paragraph_types"
}
```

then run composer require drupal/paragraphs_types