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
        
    public function createWidgetBuilder() {
        return new WidgetBuilder();
    }
    
    public function createWidgetFromType(AbstractWidgetType $widgetType) {
        
        $widgetBuilder = $widgetType->buildWidget(new WidgetBuilder());
        
        return $widgetBuilder;
    }
}

?>
