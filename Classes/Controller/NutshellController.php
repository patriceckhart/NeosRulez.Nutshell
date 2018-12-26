<?php
namespace NeosRulez\Nutshell\Controller;

/*
 * This file is part of the NeosRulez.Nutshell package.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\Controller\ActionController;

class NutshellController extends ActionController
{

    /**
     * @Flow\Inject
     * @var \NeosRulez\Nutshell\Domain\Repository\NutshellRepository
     */
    protected $nutshellRepository;

    /**
     * @var array
     */
    protected $settings;

    /**
     * @param array $settings
     * @return void
     */
    public function injectSettings(array $settings) {
        $this->settings = $settings;
    }

    /**
     * @return void
     */
    public function indexAction()
    {

    }

}
