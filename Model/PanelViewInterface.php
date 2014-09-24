<?php

namespace EV\WidgetBundle\Model;

/**
 *
 * @author Micka
 */
interface PanelViewInterface {
    public function setPanel(Panel $panel);
    
    public function getPanel();
    
    public function setTemplate($template);
    
    public function getTemplate();
    
    public function setTotalColumns($totalColumns);
    
    public function getTotalColumns();
    
    public function addRow(PanelViewRow $panelViewRow);
    
    public function getRows();
}

?>
