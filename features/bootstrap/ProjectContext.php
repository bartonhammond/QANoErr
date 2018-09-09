<?php
    
use Wisnet\BehatPom\FeatureContext;

use LightnCandy\LightnCandy;

use Behat\Behat\Context\SnippetAcceptingContext;


class ProjectContext extends FeatureContext implements SnippetAcceptingContext {

    public function __construct($buildDir = null,
                                $osApiName = null,
                                $browserApiName = null
    ) {
        parent::__construct($buildDir,
                            $osApiName,
                            $browserApiName);
    }
    // Clear the top Word press menu
    protected function scrollDownFromTopMenu()  {
        $this->iScrollTheWindowBy("-100");        
    }
    //Clear the bottom menu when in Responsive mode
    protected function scrollUpFromBottomMenu() {
        $this->iScrollTheWindowBy("200");        
    }
    

}