<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsMessageRepliesItem extends \ArrayObject
{
    /**
     * @var string
     */
    protected $ts;
    /**
     * @var string
     */
    protected $user;

    /**
     * @return string
     */
    public function getTs(): ?string
    {
        return $this->ts;
    }

    /**
     * @param string $ts
     *
     * @return self
     */
    public function setTs(?string $ts): self
    {
        $this->ts = $ts;

        return $this;
    }

    /**
     * @return string
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return self
     */
    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }
}
