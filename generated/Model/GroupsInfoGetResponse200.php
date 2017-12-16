<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class GroupsInfoGetResponse200 extends \ArrayObject
{
    /**
     * @var ObjsGroup
     */
    protected $group;
    /**
     * @var bool
     */
    protected $ok;

    /**
     * @return ObjsGroup
     */
    public function getGroup(): ?ObjsGroup
    {
        return $this->group;
    }

    /**
     * @param ObjsGroup $group
     *
     * @return self
     */
    public function setGroup(?ObjsGroup $group): self
    {
        $this->group = $group;

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
