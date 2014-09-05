<?php

namespace EV\WidgetBundle\Model;

/**
 *
 * @author Micka
 */
interface WidgetInterface {
    
    public function setHeader($header);
    
    public function getHeader();
    
    public function setBody($body);
    
    public function getBody();
    
    public function setFooter($footer);
    
    public function getFooter();
    
    public function addOption(WidgetOption $option);
    
    public function getOptions();
    
}

?>
