<?php

namespace EV\WidgetBundle\Model;


/**
 * Description of PanelView
 *
 * @author Micka
 */
class PanelView implements PanelViewInterface/*implements Iterator...*/{
    
    protected $panel;
    
    protected $template = 'EVWidgetBundle:Panel:panel_bootstrap.html.twig';
    
    protected $totalColumns = 12;
    
    protected $rows = array();
    
    public function __construct(Panel $panel) {
        $this->panel = $panel;
    }
    
    public function setPanel(Panel $panel) {
        $this->panel = $panel;
        
        return $this;
    }
    
    public function getPanel() {
        return $this->panel;
    }
    
    public function setTemplate($template){
        $this->template = $template;
        
        return $this;
    }
    
    public function getTemplate() {
        return $this->template;
    }
    
    public function setTotalColumns($totalColumns){
        $this->totalColumns = $totalColumns;
        
        return $this;
    }
    
    public function getTotalColumns() {
        return $this->totalColumns;
    }
    
    public function addRow(PanelViewRow $panelViewRow) {
        $this->rows[] = $panelViewRow;
        
        return $this;
    }
    
    public function getRows() {
        return $this->rows;
    }
    
    public function getLastRow() {
        return end($this->rows);
    }
    
}

?>
