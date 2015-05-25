<?php
/**
 * Created by PhpStorm.
 * User: aayaresko
 * Date: 23.05.15
 * Time: 11:45
 *
 * @copyright Copyright &copy; Andrej Jaresko, disbalans.net, 2015
 * @package yii2-widgets
 * @subpackage yii2-widget-maskedinputdatepicker
 */

namespace aayaresko\date;

use kartik\date\DatePicker;
use yii\widgets\MaskedInputAsset;

/**
 * позволяет использовать inputmask jquery plugin совметсно с datepicker jquery plugin.
 *
 * все методы выполняются согласно логике widgetTrait из пакета @see https://github.com/kartik-v/yii2-krajee-base .
 *
 * Class MaskedInputDatePicker
 * @package yii\widgets
 * @author aayareko <aayaresko@gmail.com>
 * @see http://www.yiiframework.com/doc-2.0/yii-widgets-maskedinput.html
 * @see http://demos.krajee.com/widget-details/datepicker
 */
class MaskedInputDatePicker extends DatePicker
{

    public $enableMaskedInput = false;
    public $maskedInputOptions;

    /**
     * выполнит настройку параметров widget.
     *
     * все свойства наследуются от родительского widget (DatePicker).
     *
     */
    public function init()
    {
        parent::init();

        $this->pluginOptions = isset($this->maskedInputOptions['pluginOptions']) ? $this->maskedInputOptions['pluginOptions'] : [];
        $this->pluginEvents = isset($this->maskedInputOptions['pluginEvents']) ? $this->maskedInputOptions['pluginEvents'] : [];

        if(isset($this->maskedInputOptions['mask'])) {
            $this->pluginOptions['mask'] = $this->maskedInputOptions['mask'];
        }

    }

    /**
     * выполняет запуск widget.
     *
     * @inheritdoc
     */
    public function run()
    {
        if($this->enableMaskedInput) {
            parent::run();
            $this->registerClientScript();
        }
    }

    /**
     * регистрирует необходимые скрипты для работы maskedInput jquery plugin.
     */
    public function registerClientScript()
    {
        $element = "jQuery('#" . $this->options['id'] . "')";
        MaskedInputAsset::register($this->getView());
        $this->registerPlugin('inputmask', $element);
    }
}
