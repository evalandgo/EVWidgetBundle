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
    
    public function addPanelElement(PanelElement $panelElement) {
                
        $this->sortPanelElements();
        
        if ($panelElement->getPosition() === null) {
            $defaultPosition = 1;
            if ( !empty($this->panelElements) ) {
                $defaultPosition = end($this->panelElements)->getPosition()+1;
            }
            $panelElement->setPosition($defaultPosition);
        }
        
        $this->panelElements[] = $panelElement;
        
        return $this;
    }
    
    public function getPanelElements() {
        $this->sortPanelElements();
        
        return $this->panelElements;
    }
    
    protected function sortPanelElements() {
        usort($this->panelElements, function($a, $b) {
            if ($a->getPosition() == $b->getPosition()) {
                return 0;
            }
            return ($a->getPosition() < $b->getPosition()) ? -1 : 1;
        });
    }
    
    
    
    /*public function setTotalColumns($totalColumns) {
        $this->totalColumns = $totalColumns;
    }
    
    public function getTotalColumns() {
        return $this->totalColumns;
    }*/
    
}

?>
