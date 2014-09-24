<?php

namespace EV\WidgetBundle\Model;

/**
 * Description of Panel
 *
 * @author Micka
 */
class Panel implements PanelInterface {
    
    //protected $totalColumns = 3;
    
    protected $panelElements = array();
    
    public function addPanelElement(PanelElement $panelElements) {
        $this->panelElements[] = $panelElements;
        
        return $this;
    }
    
    public function getPanelElements() {
        usort($this->panelElements, function($a, $b) {
            if ($a->getPosition() == $b->getPosition()) {
                return 0;
            }
            return ($a->getPosition() < $b->getPosition()) ? -1 : 1;
        });
        
        return $this->panelElements;
    }
    
    /*public function setTotalColumns($totalColumns) {
        $this->totalColumns = $totalColumns;
    }
    
    public function getTotalColumns() {
        return $this->totalColumns;
    }*/
    
}

?>
