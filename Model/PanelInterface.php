<?php

namespace EV\WidgetBundle\Model;

/**
 *
 * @author Micka
 */
interface PanelInterface {
    
    public function addElement(PanelElement $element);
    
    public function getElements();
    
    public function setTotalColumns($totalColumns);
    
    public function getTotalColumns();
    
}

?>
