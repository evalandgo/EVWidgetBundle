<?php

namespace EV\WidgetBundle\Factory;


use EV\WidgetBundle\Builder\WidgetBuilder;

/**
 * Description of WidgetFactory
 *
 * @author Micka
 */
class WidgetFactory {
        
    public function createWidgetBuilder() {
        return new WidgetBuilder();
    }
    
}

?>
