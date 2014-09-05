<?php

namespace EV\WidgetBundle\Model;

/**
 * Description of WidgetOption
 *
 * @author Micka
 */
abstract class WidgetOption {
    
    protected $label;
    
    public function setLabel($label) {
        $this->label = $label;
        
        return $this;
    }
    
    public function getLabel() {
        return $this->label;
    }
    
    abstract public function getType();
    
}

?>
