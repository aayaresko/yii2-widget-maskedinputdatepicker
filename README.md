# yii2-widget-maskedinputdatepicker
Implements MaskedInput jquery plugin in conjunction with DatePicker jquery plugin

## Widget MaskedInput in Conjunction with DatePicker (using jquery plugins).

Зависимо от передаваемой в качестве параметра массива maskedInputOptions['mask'] создаст
DatePicker field с MaskedInput (параметр enableMaskedInput)

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
echo MaskedInputDatePicker::widget([
    'enableMaskedInput' => true,
    'maskedInputOptions' => [
        'mask' => '99.99.9999',
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

Важно! Значение полей format и value должны соответствовать маске, указанной в параметре mask

Конфигурация plugin осуществляется через параметры:
* enableMaskedInput - использовать MaskedInput (по умолчанию false - не использовать)
* maskedInputOptions - массив параметров, передаваемых в качестве настроек inputmask jquery plugin, должен включать в себя вложенные массивы:
** 'pluginOptions' - непосредственно настройки jquery plugin;
** 'pluginEvents' (события, обрабатываемые jquery plugin);
** 'mask' - маска вводимых значений

## License
**yii2-widget-maskedinputdatepicker** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.
