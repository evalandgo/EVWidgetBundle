<?php

namespace EV\WidgetBundle\Twig\Extension;

use EV\WidgetBundle\Model\WidgetInterface;
use EV\WidgetBundle\Model\PanelInterface;
use EV\WidgetBundle\Model\PanelViewInterface;

/**
 * Description of PanelExtension
 *
 * @author Micka
 */
class PanelExtension extends \Twig_Extension {
    
    protected $environment;
    
    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }
    
    public function getFunctions()
    {
        return array(
            'ev_panel_render' => new \Twig_Function_Method($this, 'renderPanel', array('is_safe' => array('html'))),
        );
    }
    
    public function renderPanel(PanelViewInterface $panelView) {
        
        return $this->environment->render($panelView->getTemplate(), array('panelView' => $panelView));
    }
    
    public function getName()
    {
        return 'ev_panel';
    }
    
}

?>