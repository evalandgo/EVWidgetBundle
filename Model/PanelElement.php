<?php

namespace EV\WidgetBundle\Model;

/**
 * Description of PanelElement
 *
 * @author Micka
 */
abstract class PanelElement {
    
    protected $width;
    
    protected $position;
    
    public function __construct($width, $position) {
        $this->width = $width;
        $this->position = $position;
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
    
    abstract public function setElement(PanelElementable $element);
    
    abstract public function getElement();
    
}

?>
