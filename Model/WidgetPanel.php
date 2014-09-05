<?php

namespace EV\WidgetBundle\Model;

/**
 * Description of WidgetPanel
 *
 * @author Micka
 */
class WidgetPanel {
    
    protected $width;
    
    protected $position;
    
    protected $widget;
    
    public function setWidth($width) {
        $this->width = $width;
        
        return $this;
    }
    
    public function getWidth() {
        return $this->width;
    }
    
    public function setPosition($position) {
        $this->position = $position;
        
        return $this;
    }
    
    public function getPosition() {
        return $this->position;
    }
    
    public function setWidget(Widget $widget) {
        $this->widget = $widget;
        
        return $this;
    }
    
    public function getWidget() {
        return $this->widget;
    }
    
}

?>
