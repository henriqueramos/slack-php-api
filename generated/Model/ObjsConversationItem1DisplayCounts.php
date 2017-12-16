<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsConversationItem1DisplayCounts extends \ArrayObject
{
    /**
     * @var int
     */
    protected $displayCounts;
    /**
     * @var int
     */
    protected $guestCounts;

    /**
     * @return int
     */
    public function getDisplayCounts(): ?int
    {
        return $this->displayCounts;
    }

    /**
     * @param int $displayCounts
     *
     * @return self
     */
    public function setDisplayCounts(?int $displayCounts): self
    {
        $this->displayCounts = $displayCounts;

        return $this;
    }

    /**
     * @return int
     */
    public function getGuestCounts(): ?int
    {
        return $this->guestCounts;
    }

    /**
     * @param int $guestCounts
     *
     * @return self
     */
    public function setGuestCounts(?int $guestCounts): self
    {
        $this->guestCounts = $guestCounts;

        return $this;
    }
}
