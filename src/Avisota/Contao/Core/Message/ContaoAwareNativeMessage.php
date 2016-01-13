<?php

/**
 * Avisota newsletter and mailing system
 *
 * PHP Version 5.3
 *
 * @copyright  way.vision 2016
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @package    avisota/contao-core
 * @license    LGPL-3.0+
 * @link       http://avisota.org
 */

namespace Avisota\Contao\Core\Message;

use Avisota\Contao\Entity\Message;
use Avisota\Message\NativeMessage;
use Avisota\Recipient\RecipientInterface;

/**
 * A native swift message with additional data.
 *
 * @package    avisota/contao-core
 */
class ContaoAwareNativeMessage extends NativeMessage
{
    /**
     * The swift message.
     *
     * @var Message
     */
    protected $contaoMessage;

    /**
     * The contao internal recipients.
     *
     * @var array|RecipientInterface[]
     */
    protected $internalRecipients;

    /**
     * @param \Swift_Message $message
     * @param Message        $contaoMessage
     * @param array          $internalRecipients
     *
     * @internal param array|\Avisota\Recipient\RecipientInterface[] $recipients
     */
    public function __construct(\Swift_Message $message, Message $contaoMessage, array $internalRecipients)
    {
        parent::__construct($message);

        $this->contaoMessage      = $contaoMessage;
        $this->internalRecipients = $internalRecipients;
    }

    /**
     * @return \Avisota\Contao\Entity\Message
     */
    public function getContaoMessage()
    {
        return $this->contaoMessage;
    }

    /**
     * @return array|\Avisota\Recipient\RecipientInterface[]
     */
    public function getInternalRecipients()
    {
        return $this->internalRecipients;
    }
}
