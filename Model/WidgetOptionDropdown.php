<?php

namespace EV\WidgetBundle\Model;

/**
 * Description of WidgetOptionDropdown
 *
 * @author Micka
 */
class WidgetOptionDropdown extends WidgetOption {
    
    protected $actions = array();
    
    public function addAction($action) {
        $this->actions[] = $action;
        
        return $this;
    }
    
    public function getActions() {
        return $this->actions;
    }
    
    public function getType() {
        return 'dropdown';
    }
    
}

?>
