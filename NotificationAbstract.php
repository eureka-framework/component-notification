<?php

/**
 * Copyright (c) 2010-2016 Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Component\Notification;

/**
 * Class for basic notifications on actions (save, delete...)
 *
 * @author  Romain Cottard
 * @version 1.0.0
 */
abstract class NotificationAbstract implements NotificationInterface
{
    /**
     * @var string $message
     */
    protected $message = '';

    /**
     * @var int $type
     */
    protected $type = '';

    /**
     * Notification constructor.
     *
     * @param string $message
     * @param int    $type
     */
    public function __construct($message, $type = self::TYPE_SUCCESS)
    {
        $this->setMessage($message);
        $this->setType($type);
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Get Type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set message
     *
     * @param  string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Set type
     *
     * @param  int $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
