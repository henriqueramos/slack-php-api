<?php

declare(strict_types=1);

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack\Api\Model;

class ConversationsInviteSharedPostResponse200
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var bool|null
     */
    protected $ok;
    /**
     * @var bool|null
     */
    protected $isLegacySharedChannel;
    /**
     * @var string|null
     */
    protected $inviteId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->initialized['ok'] = true;
        $this->ok = $ok;

        return $this;
    }

    public function getInviteId(): ?string
    {
        return $this->inviteId;
    }

    public function setInviteId(?string $inviteId): self
    {
        $this->initialized['inviteId'] = $inviteId;
        $this->inviteId = $inviteId;

        return $this;
    }

    public function getIsLegacySharedChannel(): ?string
    {
        return $this->isLegacySharedChannel;
    }

    public function setIsLegacySharedChannel(?string $isLegacySharedChannel): self
    {
        $this->initialized['isLegacySharedChannel'] = $isLegacySharedChannel;
        $this->isLegacySharedChannel = $isLegacySharedChannel;

        return $this;
    }
}
