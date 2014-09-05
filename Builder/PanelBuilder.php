<?php

namespace EV\WidgetBundle\Builder;

use EV\WidgetBundle\Model\Panel;
use EV\WidgetBundle\Model\PanelElementWidget;
use EV\WidgetBundle\Model\PanelView;

/**
 * Description of PanelBuilder
 *
 * @author Micka
 */
class PanelBuilder {
    
    protected $panel;
    
    public function __construct() {
        $this->panel = new Panel();
    }
    
    public function addElementWidget($params) {
        $defaultParams = array(
            'width' => null,
            'position' => null,
            'widget' => null
        );
        
        $params = array_replace($defaultParams, $params);
        
        $panelElementWidget = new PanelElementWidget($params['width'], $params['position'], $params['widget']);
        
        $this->panel->addElement($panelElementWidget);
        
        return $this;
    }
    
    public function createView() {
        return new PanelView($this->panel);
    }
    
}

?>
