<?php

namespace EV\WidgetBundle\WidgetType;

use EV\WidgetBundle\Builder\WidgetBuilder;

/**
 * Description of AbstractWidgetType
 *
 * @author Micka
 */
abstract class AbstractWidgetType {
    
    abstract public function buildWidget(WidgetBuilder $widgetBuilder);
    
    abstract public function getName();
    
}

?>
