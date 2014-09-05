<?php

namespace EV\WidgetBundle\Factory;

use EV\WidgetBundle\Model\Widget;
use EV\WidgetBundle\Model\WidgetOption;
use EV\WidgetBundle\Model\WidgetOptionButton;
use EV\WidgetBundle\Model\WidgetOptionDropdown;

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
