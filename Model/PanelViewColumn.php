<?php

namespace EV\WidgetBundle\Model;

/**
 * Description of PanelViewColumn
 *
 * @author Micka
 */
class PanelViewColumn {
    
    protected $width;
    
    protected $element;
    
    public function __construct($width, $element) {
        $this->width = $width;
        $this->element = $element;
    }
    
    public function setWidth($width) {
        $this->width = $width;
        
        return $this;
    }
    
    public function getWidth() {
        return $this->width;
    }
    
    public function setElement(PanelElementable $element) {
        $this->element = $element;
        
        return $this;
    }
    
    public function getElement() {
        return $this->element;
    }
    
}

?>
