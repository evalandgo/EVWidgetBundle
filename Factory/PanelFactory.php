<?php

namespace EV\WidgetBundle\Factory;

use EV\WidgetBundle\Builder\PanelBuilder;

/**
 * Description of PanelFactory
 *
 * @author Micka
 */
class PanelFactory {
    
    public function createPanelBuilder() {
        return new PanelBuilder();
    }
    
}

?>