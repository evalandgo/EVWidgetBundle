<?php

namespace EV\WidgetBundle\Model;

/**
 * Description of Panel
 *
 * @author Micka
 */
class Panel implements PanelInterface {
    
    protected $widgetPanels = array();
    
    public function addWidgetPanel(WidgetPanel $widgetPanel) {
        $this->widgetPanels[] = $widgetPanel;
        
        return $this;
    }
    
    public function getWidgetPanels() {
        return $this->widgetPanels;
    }
    
}

?>
