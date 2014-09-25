<?php

namespace EV\WidgetBundle\Model;

/**
 * Description of Widget
 *
 * @author Micka
 */
class Widget implements WidgetInterface, PanelElementable {
    
    protected $name;
    
    protected $header;
    
    protected $body;
    
    protected $footer;
    
    protected $options = array();
    
    public function __construct($name = null) {
        $this->name = $name;
    }
    
    public function setName($name) {
        $this->name = $name;
        
        return $this;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setHeader($header) {
        $this->header = $header;
        
        return $this;
    }
    
    public function getHeader() {
        return $this->header;
    }
    
    public function setBody($body) {
        $this->body = $body;
        
        return $this;
    }
    
    public function getBody() {
        return $this->body;
    }
    
    public function setFooter($footer) {
        $this->footer = $footer;
        
        return $this;
    }
    
    public function getFooter() {
        return $this->footer;
    }
    
    public function addOption(WidgetOption $option) {
        $this->options[] = $option;
        
        return $this;
    }
    
    /*public function removeOption() {
        
    }
    
    public function hasOption() {
        
    }*/
    
    public function getOptions() {
        return $this->options;
    }
    
    public function getTwigExensionName() {
        return 'ev_widget';
    }
    
    public function getRenderMethod() {
        return 'renderWidget';
    }
    
}

?>
