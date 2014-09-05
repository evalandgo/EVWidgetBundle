<?php

namespace EV\WidgetBundle\Builder;

use EV\WidgetBundle\Model\Widget;
use EV\WidgetBundle\Model\WidgetOptionButton;
use EV\WidgetBundle\Model\WidgetOptionDropdown;

/**
 * Description of WidgetBuilder
 *
 * @author Micka
 */
class WidgetBuilder {
    
    protected $widget;
    
    public function __construct() {
        $this->widget = new Widget();
    }
    
    public function addLayouts($layouts = array()) {
        $defaultLayouts = array(
            'header' => null,
            'body' => null,
            'footer' => null
        );
        
        $layouts = array_replace($defaultLayouts, $layouts);
        
        $this->widget->setHeader($layouts['header']);
        $this->widget->setBody($layouts['body']);
        $this->widget->setFooter($layouts['footer']);
        
        return $this;
    }
    
    public function addOptionButton($params = array()) {
        $defaultParams = array(
            'label' => null,
        );
        
        $params = array_replace($defaultParams, $params);
        
        $widgetOptionButton = new WidgetOptionButton();
        $widgetOptionButton->setLabel($params['label']);
        
        $this->widget->addOption($widgetOptionButton);
        
        return $this;
    }
    
    public function addOptionDropdown($params = array()) {
        $defaultParams = array(
            'label' => null,
            'actions' => array(),
        );
        
        $params = array_replace($defaultParams, $params);
        
        $widgetOptionDropdown = new WidgetOptionDropdown();
        $widgetOptionDropdown->setLabel($params['label']);
        
        foreach ($params['actions'] as $action) {
            $widgetOptionDropdown->addAction($action);
        }
                
        $this->widget->addOption($widgetOptionDropdown);
        
        return $this;
    }
    
    public function createView() {
        return $this->widget;
    }
    
}

?>
