<?php

namespace EV\WidgetBundle\Model;

/**
 * Description of PanelViewRow
 *
 * @author Micka
 */
class PanelViewRow {
    
    protected $columns = array();
    
    public function addColumn(PanelViewColumn $columns) {
        $this->columns[] = $columns;
        
        return $this;
    }
    
    public function getColumns() {
        return $this->columns;
    }
    
}

?>
