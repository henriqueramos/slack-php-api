<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class PinsRemovePostResponsedefault extends \ArrayObject
{
    /**
     * @var string
     */
    protected $error;
    /**
     * @var bool
     */
    protected $ok;

    /**
     * @return string
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @param string $error
     *
     * @return self
     */
    public function setError(?string $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOk(): ?bool
    {
        return $this->ok;
    }

    /**
     * @param bool $ok
     *
     * @return self
     */
    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }
}
