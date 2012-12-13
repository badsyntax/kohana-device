kohana-device
=============

A kohana 3.3 module that provides device detection. 
It's simply a wrapper around the [Mobile_Detect](https://github.com/serbanghita/Mobile-Detect) class.

### Installation

1. Add the kohana-device module as a submodule to your `/module` directory
2. Update the submodules within the kohana-device module: `git submodule update --init` 
2. Enabled the module in your bootstrap.php file

### Usage

Instantiate the class and detect mobile:
```php
$device = new Device();

if ($device->is_mobile()) 
{
  // Any mobile device.
};
```
