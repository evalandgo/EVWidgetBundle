<?php

namespace EV\WidgetBundle\Model;


/**
 * Description of PanelView
 *
 * @author Micka
 */
class PanelView implements PanelViewInterface/*implements Iterator...*/{
    
    protected $panel;
    
    protected $rows = array();
    
    public function __construct(Panel $panel) {
        $this->panel = $panel;
    }
    
    public function setPanel(Panel $panel) {
        $this->panel = $panel;
        
        return $this;
    }
    
    public function getPanel() {
        return $this->panel;
    }
    
    public function addRow(PanelViewRow $panelViewRow) {
        $this->rows[] = $panelViewRow;
        
        return $this;
    }
    
    public function getRows() {
        return $this->rows;
    }
    
}

?>
