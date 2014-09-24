<?php

namespace EV\WidgetBundle\Builder;

use EV\WidgetBundle\Model\Panel;
use EV\WidgetBundle\Model\PanelElementWidget;
use EV\WidgetBundle\Model\PanelView;
use EV\WidgetBundle\Handler\PanelViewHandler;

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
        
        $this->panel->addPanelElement($panelElementWidget);
        
        return $this;
    }
    
    public function createView() {
        
        $panelViewHandler = new PanelViewHandler(new PanelView($this->panel));
        $panelViewHandler->createLayouts();
        $panelView = $panelViewHandler->getPanelView();
        
        return $panelView;
    }
    
}

?>
