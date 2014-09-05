<?php

namespace EV\WidgetBundle\Model;

/**
 *
 * @author Micka
 */
interface PanelInterface {
    
    public function addWidgetPanel(WidgetPanel $widgetPanel);
    
    public function getWidgetPanels();
    
}

?>
