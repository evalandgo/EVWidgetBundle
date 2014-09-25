<?php

namespace EV\WidgetBundle\Model;

/**
 * Description of PanelElement
 *
 * @author Micka
 */
class PanelElement {
    
    protected $width;
    
    protected $position;
    
    protected $element;
    
    public function __construct($width, $position, $element) {
        $this->width = $width;
        $this->position = $position;
        $this->element = $element;
    }
    
    public function setWidth($width) {
        $this->width = $width;
        
        return $this;
    }
    
    public function getWidth() {
        return $this->width;
    }
    
    public function setPosition($position) {
        $this->position = $position;
        
        return $this;
    }
    
    public function getPosition() {
        return $this->position;
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
