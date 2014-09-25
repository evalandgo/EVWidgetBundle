<?php

namespace EV\WidgetBundle\Builder;

use EV\WidgetBundle\Model\Panel;
use EV\WidgetBundle\Model\PanelElement;
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
    
    // TODO : modifier cette méthode pour accépter des PanelElement custom
    public function addPanelElement($params) {
        $defaultParams = array(
            'width' => null,
            'position' => null,
            'element' => null
        );
        
        $params = array_replace($defaultParams, $params);
        
        $panelElement = new PanelElement($params['width'], $params['position'], $params['element']);
        
        $this->panel->addPanelElement($panelElement);
        
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
