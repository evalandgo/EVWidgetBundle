<?php

namespace EV\WidgetBundle\Handler;

use EV\WidgetBundle\Model\PanelElement;
use EV\WidgetBundle\Model\PanelView;
use EV\WidgetBundle\Model\PanelViewRow;
use EV\WidgetBundle\Model\PanelViewColumn;


/**
 * Description of PanelViewHandler
 *
 * @author Micka
 */
class PanelViewHandler {
    
    protected $panelView;
    
    public function __construct(PanelView $panelView) {
        $this->panelView = $panelView;
    }
    
    public function createLayouts() {

        foreach($this->panelView->getPanel()->getPanelElements() as $panelElement) {
            
            if ( $panelElement->getWidth() > $this->panelView->getTotalColumns() ) {
                throw new \Exception('The size of an PanelElement is greater than the number of possible columns');
            }
            
            $this->pushPanelElementInView($panelElement);
        }
        
        return $this;
    }
    
    public function getPanelView() {
        return $this->panelView;
    }
    
    protected function pushPanelElementInView(PanelElement $panelElement) {
        
        if ( $this->panelView->getLastRow() === false || $panelElement->getWidth() > $this->getRemainingSpaceInRow($this->panelView->getLastRow()) ) {
            $this->addRowInView();
        }
        
        $this->addColumnInLastRow($panelElement);
        
        return $this;
    }
    
    protected function addRowInView() {
        $row = new PanelViewRow();
        $this->panelView->addRow($row);
        
        return $this;
    }
    
    protected function addColumnInLastRow(PanelElement $panelElement) {
        $column = new PanelViewColumn($panelElement->getWidth(), $panelElement->getElement());
        $this->panelView->getLastRow()->addColumn($column);
        
        return $this;
    }
    
    protected function getRemainingSpaceInRow(PanelViewRow $row) {
        $remainingSpace = $this->panelView->getTotalColumns();
        
        foreach($row->getColumns() as $column) {
            $remainingSpace = $remainingSpace - $column->getWidth();
        }
                
        return $remainingSpace;
    }
    
    
}

?>
