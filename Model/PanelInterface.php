<?php

namespace EV\WidgetBundle\Model;

/**
 *
 * @author Micka
 */
interface PanelInterface {
    
    public function addPanelElement(PanelElement $element);
    
    public function getPanelElements();
    
    /*public function setTotalColumns($totalColumns);
    
    public function getTotalColumns();*/
    
}

?>
