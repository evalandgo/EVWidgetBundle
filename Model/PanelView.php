<?php

namespace EV\WidgetBundle\Model;

/**
 * Description of PanelView
 *
 * @author Micka
 */
class PanelView implements PanelViewInterface/*implements Iterator...*/{
    
    protected $panel;
    
    protected $rows;
    
    public function __construct(Panel $panel) {
        $this->panel = $panel;
    }
    
    public function setPanel(Panel $panel) {
        $this->panel = $panel;
        
        return $this;
    }
    
    public function getPanel() {
        return $this->Panel;
    }
    
    public function getRows() {
        
    }
    
}

?>
