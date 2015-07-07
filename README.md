# yii2-widget-maskedinputdatepicker
Implements inputMask jquery plugin in conjunction with DatePicker jquery plugin

## Widget InputMask in Conjunction with DatePicker (using jquery plugins).

Creates a DatePicker field with InputMask in specified via maskedInputOptions['mask'] format.

## Installation

The preferred way to install extension is via [composer](http://getcomposer.org/download/). Check the [composer.json](https://github.com/aayaresko/yii2-widget-maskedinputdatepicker/blob/master/composer.json) for this extension's requirements and dependencies.

To install, either run

```
$ php composer.phar require aayaresko/yii2-widget-maskedinputdatepicker "*"
```

or add

```
"aayaresko/yii2-widget-maskedinputdatepicker": "*"
```

to the ```require``` section of your `composer.json`.

## Usage

Upload all necessary components and prepare widet

```php
use aayaresko\date\MaskedInputDatePicker
```

```php
echo MaskedInputDatePicker::widget([
    'enableMaskedInput' => true,
    'maskedInputOptions' => [
        'mask' => '99.99.9999',
        'pluginEvents' => [
            'complete' => "function(){console.log('complete');}"
        ]
    ],
    'name' => 'dp_3',
    'type' => MaskedInputDatePicker::TYPE_COMPONENT_APPEND,
    'value' => '23.09.1982',
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'dd.M.yyyy'
    ]
]);
```

## Important
Values of fields ``format`` and ``value`` and ``mask`` must be the same

Configure plugin via parameters:
* enableMaskedInput - whether to use InputMask or not (default false - do not use)
* maskedInputOptions - inputmask jquery plugin configuration parameters, it must contain the arrays:
    * 'pluginOptions' - jquery plugin settings;
    * 'pluginEvents' - jquery plugin events;
    * 'mask' - input mask.

## License
**yii2-widget-maskedinputdatepicker** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.
