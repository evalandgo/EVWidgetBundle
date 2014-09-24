<?php

namespace EV\WidgetBundle\Model;

/**
 * Description of PanelElementWidget
 *
 * @author Micka
 */
class PanelElementWidget extends PanelElement {
    
    protected $widget;
    
    public function __construct($width, $position, $widget) {
        parent::__construct($width, $position);
        $this->widget = $widget;
    }
    
    public function setElement(PanelElementable $widget) {
        $this->widget = $widget;
        
        return $this;
    }
    
    public function getElement() {
        return $this->widget;
    }
    
}

?>
