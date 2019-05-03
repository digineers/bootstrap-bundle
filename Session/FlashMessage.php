<?php
/**
 * This file is part of BraincraftedBootstrapBundle.
 *
 * (c) 2012-2013 by Florian Eckerstorfer
 */

namespace Braincrafted\Bundle\BootstrapBundle\Session;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * FlashMessage
 *
 * @package    BraincraftedBootstrapBundle
 * @subpackage Session
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright  2012-2013 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       http://bootstrap.braincrafted.com Bootstrap for Symfony2
 */
class FlashMessage
{

    /**
     * @var Session
     */
    private $session;


    /**
     * FlashMessage constructor.
     *
     * @param Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * Sets an alert message.
     *
     * @param string $message The message
     * @param array $translationParams Optional translation parameters
     */
    public function alert($message, array $translationParams = [])
    {
        $this->session->getFlashBag()->add('alert', $message);
        $this->session->getFlashBag()->add('alert_params', $translationParams);
    }

    /**
     * Alias for `danger()`.
     *
     * @param string $message The message
     * @param array $translationParams Optional translation parameters
     */
    public function error($message, array $translationParams = [])
    {
        $this->danger($message, $translationParams);
    }

    /**
     * Sets a danger message.
     *
     * @param string $message
     * @param array $translationParams Optional translation parameters
     */
    public function danger($message, array $translationParams = [])
    {
        $this->session->getFlashBag()->add('danger', $message);
        $this->session->getFlashBag()->add('danger_params', $translationParams);
    }

    /**
     * Sets an info message.
     *
     * @param string $message The message
     * @param array $translationParams Optional translation parameters
     */
    public function info($message, array $translationParams = [])
    {
        $this->session->getFlashBag()->add('info', $message);
        $this->session->getFlashBag()->add('info_params', $translationParams);
    }

    /**
     * Sets a success message.
     *
     * @param string $message The message
     * @param array $translationParams Optional translation parameters
     */
    public function success($message, array $translationParams = [])
    {
        $this->session->getFlashBag()->add('success', $message);
        $this->session->getFlashBag()->add('success_params', $translationParams);
    }

    /**
     * Resets the flash bag.
     */
    public function reset()
    {
        $this->session->getFlashBag()->clear();
    }
}
