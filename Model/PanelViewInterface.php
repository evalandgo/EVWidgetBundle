<?php

namespace EV\WidgetBundle\Model;

/**
 *
 * @author Micka
 */
interface PanelViewInterface {
    public function setPanel(Panel $panel);
    
    public function getPanel();
    
    public function getRows();
}

?>
