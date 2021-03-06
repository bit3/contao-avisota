<?php

/**
 * Avisota newsletter and mailing system
 * Copyright © 2016 Sven Baumann
 *
 * PHP version 5
 *
 * @copyright  way.vision 2016
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @package    avisota/contao-core
 * @license    LGPL-3.0+
 * @filesource
 */

namespace Avisota\Contao\Core\Message\Renderer;

use Avisota\Message\MessageInterface;
use Avisota\Renderer\DelegateMessageRenderer;
use Avisota\Renderer\MessageRendererInterface;

/**
 * The replay to overwrite message renderer.
 *
 * Implementation of a delegate message renderer.
 * Primary used as base class for custom implementations.
 */
class ReplyToOverwriteMessageRenderer extends DelegateMessageRenderer
{
    /**
     * The replay to address.
     *
     * @var string
     */
    protected $replyTo;

    /**
     * The replay to name.
     *
     * @var string
     */
    protected $replyToName;

    /**
     * DelegateMessageRenderer constructor.
     *
     * @param MessageRendererInterface $delegate    The delegate message renderer.
     * @param string                   $replyTo     The replay to address.
     * @param string                   $replyToName The replay to name.
     */
    public function __construct(MessageRendererInterface $delegate, $replyTo, $replyToName)
    {
        parent::__construct($delegate);
        $this->replyTo     = (string) $replyTo;
        $this->replyToName = (string) $replyToName;
    }

    /**
     * Set the replay to address.
     *
     * @param string $replyTo
     *
     * @return $this
     */
    public function setReplyTo($replyTo)
    {
        $this->replyTo = (string) $replyTo;
        return $this;
    }

    /**
     * Get the replay to address.
     *
     * @return string
     */
    public function getReplyTo()
    {
        return $this->replyTo;
    }

    /**
     * Set the replay to name.
     *
     * @param string $replyToName
     *
     * @return $this
     */
    public function setReplyToName($replyToName)
    {
        $this->replyToName = (string) $replyToName;
        return $this;
    }

    /**
     * Get the replay to name.
     *
     * @return string
     */
    public function getReplyToName()
    {
        return $this->replyToName;
    }

    /**
     * Render a message and create a Swift_Message.
     *
     * @param MessageInterface $message
     *
     * @return \Swift_Message
     */
    public function renderMessage(MessageInterface $message)
    {
        $swiftMessage = $this->delegate->renderMessage($message);

        $swiftMessage->setReplyTo($this->replyTo, $this->replyToName);

        return $swiftMessage;
    }
}
