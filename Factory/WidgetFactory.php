<?php

namespace EV\WidgetBundle\Factory;


use EV\WidgetBundle\Builder\WidgetBuilder;
use EV\WidgetBundle\WidgetType\AbstractWidgetType;

/**
 * Description of WidgetFactory
 *
 * @author Micka
 */
class WidgetFactory {
        
    public function createWidgetBuilder($name = null) {
        return new WidgetBuilder($name);
    }
    
    public function createWidgetFromType(AbstractWidgetType $widgetType) {
        
        $widgetBuilder = $widgetType->buildWidget(new WidgetBuilder($widgetType->getName()));
        
        return $widgetBuilder;
    }
}

?>
