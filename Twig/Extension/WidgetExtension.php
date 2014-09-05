<?php

namespace EV\WidgetBundle\Twig\Extension;

use EV\WidgetBundle\Model\WidgetInterface;
use EV\WidgetBundle\Model\PanelInterface;
use EV\WidgetBundle\Model\PanelViewInterface;

/**
 * Description of WidgetExtension
 *
 * @author Micka
 */
class WidgetExtension extends \Twig_Extension {
    
    protected $environment;
    
    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }
    
    public function getFunctions()
    {
        return array(
            'ev_widget_render' => new \Twig_Function_Method($this, 'renderWidget', array('is_safe' => array('html'))),
            'ev_panel_render' => new \Twig_Function_Method($this, 'renderPanel', array('is_safe' => array('html'))),
        );
    }
    
    public function renderWidget(WidgetInterface $widget) {
        
        return $this->environment->render('EVWidgetBundle:Widget:widget_bootstrap.html.twig', array('widget' => $widget));
    }
    
    public function renderPanel(PanelViewInterface $panelView) {
        
        return $this->environment->render('EVWidgetBundle:Panel:panel_bootstrap.html.twig', array('panelView' => $panelView));
    }
    
    public function getName()
    {
        return 'ev_widget';
    }
    
}

?>
