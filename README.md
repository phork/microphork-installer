#microphork-installer

* [By Phork Labs](http://phorklabs.com/)
* Version: 0.1


##Introduction

This is a package installer for the microphork framework. It makes sure that all packages are installed in `vendor/microphork/packages`.


##Usage

Each package must have its own composer.json file similar to the example below. Note that the type is `microphork-package` and that this installer is required.

```
{
	"name": "microphork/package-auth",
	"description": "An authentication package for the microphork framework",
	"type": "microphork-package",
	"require": {
		"microphork/installer": "*"
	}
}
```


##License

Licensed under The MIT License
<http://www.opensource.org/licenses/mit-license.php>