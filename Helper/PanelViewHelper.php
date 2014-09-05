<?php

namespace EV\WidgetBundle\Helper;

use EV\WidgetBundle\Model\PanelView;
use EV\WidgetBundle\Model\PanelViewRow;
use EV\WidgetBundle\Model\PanelViewColumn;

/**
 * Description of PanelViewHelper
 *
 * @author Micka
 */
class PanelViewHelper {
    
    protected $panelView;
    
    public function __construct(PanelView $panelView) {
        $this->panelView = $panelView;
    }
    
    // TODO : refactorer ce truc! / ajouter des controls et ajouter des exceptions
    public function createLayouts() {
        $nbColumns = $this->panelView->getPanel()->getTotalColumns();
        $widthOfOneColumn = 12/$nbColumns; // TODO : ajouter round();
        $elements = $this->panelView->getPanel()->getElements();
        
        $row = $this->addRow();
        $spaceInRow = $nbColumns;
        
        foreach($elements as $element) {
            if ($spaceInRow >= $element->getWidth()) {
                
                $row->addColumn(new PanelViewColumn($widthOfOneColumn*$element->getWidth(), $element->getWidget()));
                $spaceInRow = $spaceInRow - $element->getWidth();
            }
            else {
                $row = $this->addRow();
                $spaceInRow = $nbColumns;
                $row->addColumn(new PanelViewColumn($widthOfOneColumn*$element->getWidth(), $element->getWidget()));
                $spaceInRow = $spaceInRow - $element->getWidth();
            }
        }
        
        return $this;
    }
    
    protected function addRow() {
        $row = new PanelViewRow();
        $this->panelView->addRow($row);
        //var_dump($row);
        //var_dump($this->panelView);
        return $row;
    }
    
    public function getPanelView() {
        return $this->panelView;
    }
    
}

?>
