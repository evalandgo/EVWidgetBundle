<?php

namespace EV\WidgetBundle\Model;

/**
 * Description of Panel
 *
 * @author Micka
 */
class Panel implements PanelInterface {
    
    protected $totalColumns = 3;
    
    protected $elements = array();
    
    public function addElement(PanelElement $element) {
        $this->elements[] = $element;
        
        return $this;
    }
    
    public function getElements() {
        usort($this->elements, function($a, $b) {
            if ($a->getPosition() == $b->getPosition()) {
                return 0;
            }
            return ($a->getPosition() < $b->getPosition()) ? -1 : 1;
        });
        
        return $this->elements;
    }
    
    public function setTotalColumns($totalColumns) {
        $this->totalColumns = $totalColumns;
    }
    
    public function getTotalColumns() {
        return $this->totalColumns;
    }
    
}

?>
