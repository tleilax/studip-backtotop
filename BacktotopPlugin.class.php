<?php
/**
 * BacktotopPlugin.class.php
 *
 * Scrolls back to top. (wow!)
 *
 * @author  Florian Bieringer <florian.bieringer@uni-passau.de>
 * @version 1
 */

class BacktotopPlugin extends StudIPPlugin implements SystemPlugin {

    public function __construct() {
        parent::__construct();
        PageLayout::addScript($this->getPluginURL().'/assets/application.js');
    }
}
