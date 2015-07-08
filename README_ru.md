# yii2-widget-maskedinputdatepicker

Позволяет использовать InputMask jquery plugin совместно с DatePicker jquery plugin

## Widget InputMask совмещённый с DatePicker

Создаст DatePicker field c добавлением InputMask в указанном формате (параметр массива maskedInputOptions['mask']).

## Установка

Предпочтительный способ установки через [composer](http://getcomposer.org/download/). Ознакомьтесь с требовния расширения и его зависимостями в [composer.json](https://github.com/aayaresko/yii2-widget-maskedinputdatepicker/blob/master/composer.json).

Для установки выполните
```
$ php composer.phar require aayaresko/yii2-widget-maskedinputdatepicker "*"
```
или добавьте
```
"aayaresko/yii2-widget-maskedinputdatepicker": "*"
```
в секцию ```require``` вашего `composer.json`.

## Использование

Выполнить загрузку необходимых компонентов и подготовить виджет

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

## Важно 
Значения полей format и value должны соответствовать маске, указанной в параметре mask

Конфигурация plugin осуществляется через параметры:
* enableMaskedInput - использовать InputMask (по умолчанию false - не использовать)
* maskedInputOptions - массив параметров, передаваемых в качестве настроек inputmask jquery plugin, должен включать в себя вложенные массивы:
    * 'pluginOptions' - непосредственно настройки jquery plugin;
    * 'pluginEvents' - события, обрабатываемые jquery plugin;
    * 'mask' - маска вводимых значений

## License
**yii2-widget-maskedinputdatepicker** выпущен и распространяется согласно лицензией BSD 3-Clause. Подробнеес смотри `LICENSE.md`.
