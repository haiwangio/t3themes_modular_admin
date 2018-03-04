<?php
namespace SalvatoreEckel\T3themesModularAdmin\Controller;

#use \TYPO3\CMS\Core\Utility\GeneralUtility;
#use \TYPO3\CMS\Core\Messaging\AbstractMessage;
#use \TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/**
 * BaseController
 */
class BaseController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action configuration
     *
     * @return void
     */
    public function configurationAction()
    {
    }

    /**
     * action liveDemo
     *
     * @return void
     */
    public function liveDemoAction()
    {
        $this->view->assign('extkey', 't3themes_modular_admin');
    }

}
