<?php

namespace EV\WidgetBundle\Twig\Extension;

use EV\WidgetBundle\Model\WidgetInterface;

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
        );
    }
    
    public function renderWidget(WidgetInterface $widget) {
        
        return $this->environment->render('EVWidgetBundle:Widget:widget_bootstrap.html.twig', array('widget' => $widget));
    }
    
    public function getName()
    {
        return 'ev_widget';
    }
    
}

?>
