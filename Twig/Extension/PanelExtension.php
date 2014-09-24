<?php

namespace EV\WidgetBundle\Twig\Extension;

use EV\WidgetBundle\Model\PanelViewInterface;
use EV\WidgetBundle\Model\PanelElementable;

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
            'ev_panel_element_render' => new \Twig_Function_Method($this, 'renderPanelElement', array('is_safe' => array('html'))),
        );
    }
    
    public function renderPanel(PanelViewInterface $panelView) {
        return $this->environment->render($panelView->getTemplate(), array('panelView' => $panelView));
    }
    
    public function renderPanelElement(PanelElementable $element) {
        $extensions = $this->environment->getExtensions();
        
        return $extensions[$element->getTwigExensionName()]->{$element->getRenderMethod()}($element);
    }
    
    public function getName()
    {
        return 'ev_panel';
    }
    
}

?>