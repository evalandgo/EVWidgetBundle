<?php

namespace EV\WidgetBundle\Model;

/**
 *
 * @author Micka
 */
interface PanelElementable {
    
    public function getTwigExensionName();
    
    public function getRenderMethod();
    
}

?>
