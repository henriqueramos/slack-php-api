<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class RtmStartGetResponse200 extends \ArrayObject
{
    /**
     * @var mixed[]
     */
    protected $bots;
    /**
     * @var int
     */
    protected $cacheTs;
    /**
     * @var string
     */
    protected $cacheTsVersion;
    /**
     * @var string
     */
    protected $cacheVersion;
    /**
     * @var bool
     */
    protected $canManageSharedChannels;
    /**
     * @var mixed[]
     */
    protected $channels;
    /**
     * @var bool
     */
    protected $deadPig;
    /**
     * @var ObjsDnd
     */
    protected $dnd;
    /**
     * Group objects present for rtm.start. Can be null when there are no groups.
     *
     * @var mixed[]
     */
    protected $groups;
    /**
     * @var mixed[]
     */
    protected $ims;
    /**
     * @var string
     */
    protected $latestEventTs;
    /**
     * Mpim objects present for rtm.start. Can be null when there are no mpims.
     *
     * @var mixed[]
     */
    protected $mpims;
    /**
     * @var mixed[]
     */
    protected $nonThreadableChannels;
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var mixed[]
     */
    protected $readOnlyChannels;
    /**
     * @var RtmStartGetResponse200Self
     */
    protected $self;
    /**
     * @var RtmStartGetResponse200Subteams
     */
    protected $subteams;
    /**
     * @var ObjsTeam
     */
    protected $team;
    /**
     * @var mixed[]
     */
    protected $threadOnlyChannels;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var ObjsUser[]
     */
    protected $users;

    /**
     * @return mixed[]
     */
    public function getBots(): ?array
    {
        return $this->bots;
    }

    /**
     * @param mixed[] $bots
     *
     * @return self
     */
    public function setBots(?array $bots): self
    {
        $this->bots = $bots;

        return $this;
    }

    /**
     * @return int
     */
    public function getCacheTs(): ?int
    {
        return $this->cacheTs;
    }

    /**
     * @param int $cacheTs
     *
     * @return self
     */
    public function setCacheTs(?int $cacheTs): self
    {
        $this->cacheTs = $cacheTs;

        return $this;
    }

    /**
     * @return string
     */
    public function getCacheTsVersion(): ?string
    {
        return $this->cacheTsVersion;
    }

    /**
     * @param string $cacheTsVersion
     *
     * @return self
     */
    public function setCacheTsVersion(?string $cacheTsVersion): self
    {
        $this->cacheTsVersion = $cacheTsVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getCacheVersion(): ?string
    {
        return $this->cacheVersion;
    }

    /**
     * @param string $cacheVersion
     *
     * @return self
     */
    public function setCacheVersion(?string $cacheVersion): self
    {
        $this->cacheVersion = $cacheVersion;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCanManageSharedChannels(): ?bool
    {
        return $this->canManageSharedChannels;
    }

    /**
     * @param bool $canManageSharedChannels
     *
     * @return self
     */
    public function setCanManageSharedChannels(?bool $canManageSharedChannels): self
    {
        $this->canManageSharedChannels = $canManageSharedChannels;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getChannels(): ?array
    {
        return $this->channels;
    }

    /**
     * @param mixed[] $channels
     *
     * @return self
     */
    public function setChannels(?array $channels): self
    {
        $this->channels = $channels;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDeadPig(): ?bool
    {
        return $this->deadPig;
    }

    /**
     * @param bool $deadPig
     *
     * @return self
     */
    public function setDeadPig(?bool $deadPig): self
    {
        $this->deadPig = $deadPig;

        return $this;
    }

    /**
     * @return ObjsDnd
     */
    public function getDnd(): ?ObjsDnd
    {
        return $this->dnd;
    }

    /**
     * @param ObjsDnd $dnd
     *
     * @return self
     */
    public function setDnd(?ObjsDnd $dnd): self
    {
        $this->dnd = $dnd;

        return $this;
    }

    /**
     * Group objects present for rtm.start. Can be null when there are no groups.
     *
     * @return mixed[]
     */
    public function getGroups(): ?array
    {
        return $this->groups;
    }

    /**
     * Group objects present for rtm.start. Can be null when there are no groups.
     *
     * @param mixed[] $groups
     *
     * @return self
     */
    public function setGroups(?array $groups): self
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getIms(): ?array
    {
        return $this->ims;
    }

    /**
     * @param mixed[] $ims
     *
     * @return self
     */
    public function setIms(?array $ims): self
    {
        $this->ims = $ims;

        return $this;
    }

    /**
     * @return string
     */
    public function getLatestEventTs(): ?string
    {
        return $this->latestEventTs;
    }

    /**
     * @param string $latestEventTs
     *
     * @return self
     */
    public function setLatestEventTs(?string $latestEventTs): self
    {
        $this->latestEventTs = $latestEventTs;

        return $this;
    }

    /**
     * Mpim objects present for rtm.start. Can be null when there are no mpims.
     *
     * @return mixed[]
     */
    public function getMpims(): ?array
    {
        return $this->mpims;
    }

    /**
     * Mpim objects present for rtm.start. Can be null when there are no mpims.
     *
     * @param mixed[] $mpims
     *
     * @return self
     */
    public function setMpims(?array $mpims): self
    {
        $this->mpims = $mpims;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getNonThreadableChannels(): ?array
    {
        return $this->nonThreadableChannels;
    }

    /**
     * @param mixed[] $nonThreadableChannels
     *
     * @return self
     */
    public function setNonThreadableChannels(?array $nonThreadableChannels): self
    {
        $this->nonThreadableChannels = $nonThreadableChannels;

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

    /**
     * @return mixed[]
     */
    public function getReadOnlyChannels(): ?array
    {
        return $this->readOnlyChannels;
    }

    /**
     * @param mixed[] $readOnlyChannels
     *
     * @return self
     */
    public function setReadOnlyChannels(?array $readOnlyChannels): self
    {
        $this->readOnlyChannels = $readOnlyChannels;

        return $this;
    }

    /**
     * @return RtmStartGetResponse200Self
     */
    public function getSelf(): ?RtmStartGetResponse200Self
    {
        return $this->self;
    }

    /**
     * @param RtmStartGetResponse200Self $self
     *
     * @return self
     */
    public function setSelf(?RtmStartGetResponse200Self $self): self
    {
        $this->self = $self;

        return $this;
    }

    /**
     * @return RtmStartGetResponse200Subteams
     */
    public function getSubteams(): ?RtmStartGetResponse200Subteams
    {
        return $this->subteams;
    }

    /**
     * @param RtmStartGetResponse200Subteams $subteams
     *
     * @return self
     */
    public function setSubteams(?RtmStartGetResponse200Subteams $subteams): self
    {
        $this->subteams = $subteams;

        return $this;
    }

    /**
     * @return ObjsTeam
     */
    public function getTeam(): ?ObjsTeam
    {
        return $this->team;
    }

    /**
     * @param ObjsTeam $team
     *
     * @return self
     */
    public function setTeam(?ObjsTeam $team): self
    {
        $this->team = $team;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getThreadOnlyChannels(): ?array
    {
        return $this->threadOnlyChannels;
    }

    /**
     * @param mixed[] $threadOnlyChannels
     *
     * @return self
     */
    public function setThreadOnlyChannels(?array $threadOnlyChannels): self
    {
        $this->threadOnlyChannels = $threadOnlyChannels;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return ObjsUser[]
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * @param ObjsUser[] $users
     *
     * @return self
     */
    public function setUsers(?array $users): self
    {
        $this->users = $users;

        return $this;
    }
}
