<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ObjsConversationItem0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsConversationItem0';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\ObjsConversationItem0;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsConversationItem0();
        $data = clone $data;
        if (property_exists($data, 'accepted_user')) {
            $object->setAcceptedUser($data->{'accepted_user'});
            unset($data->{'accepted_user'});
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
            unset($data->{'created'});
        }
        if (property_exists($data, 'creator')) {
            $object->setCreator($data->{'creator'});
            unset($data->{'creator'});
        }
        if (property_exists($data, 'display_counts')) {
            $object->setDisplayCounts($this->denormalizer->denormalize($data->{'display_counts'}, 'JoliCode\\Slack\\Api\\Model\\ObjsConversationItem0DisplayCounts', 'json', $context));
            unset($data->{'display_counts'});
        }
        if (property_exists($data, 'has_pins')) {
            $object->setHasPins($data->{'has_pins'});
            unset($data->{'has_pins'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
            unset($data->{'id'});
        }
        if (property_exists($data, 'is_archived')) {
            $object->setIsArchived($data->{'is_archived'});
            unset($data->{'is_archived'});
        }
        if (property_exists($data, 'is_channel')) {
            $object->setIsChannel($data->{'is_channel'});
            unset($data->{'is_channel'});
        }
        if (property_exists($data, 'is_ext_shared')) {
            $object->setIsExtShared($data->{'is_ext_shared'});
            unset($data->{'is_ext_shared'});
        }
        if (property_exists($data, 'is_general')) {
            $object->setIsGeneral($data->{'is_general'});
            unset($data->{'is_general'});
        }
        if (property_exists($data, 'is_group')) {
            $object->setIsGroup($data->{'is_group'});
            unset($data->{'is_group'});
        }
        if (property_exists($data, 'is_im')) {
            $object->setIsIm($data->{'is_im'});
            unset($data->{'is_im'});
        }
        if (property_exists($data, 'is_member')) {
            $object->setIsMember($data->{'is_member'});
            unset($data->{'is_member'});
        }
        if (property_exists($data, 'is_moved')) {
            $object->setIsMoved($data->{'is_moved'});
            unset($data->{'is_moved'});
        }
        if (property_exists($data, 'is_mpim')) {
            $object->setIsMpim($data->{'is_mpim'});
            unset($data->{'is_mpim'});
        }
        if (property_exists($data, 'is_open')) {
            $object->setIsOpen($data->{'is_open'});
            unset($data->{'is_open'});
        }
        if (property_exists($data, 'is_org_shared')) {
            $object->setIsOrgShared($data->{'is_org_shared'});
            unset($data->{'is_org_shared'});
        }
        if (property_exists($data, 'is_pending_ext_shared')) {
            $object->setIsPendingExtShared($data->{'is_pending_ext_shared'});
            unset($data->{'is_pending_ext_shared'});
        }
        if (property_exists($data, 'is_private')) {
            $object->setIsPrivate($data->{'is_private'});
            unset($data->{'is_private'});
        }
        if (property_exists($data, 'is_read_only')) {
            $object->setIsReadOnly($data->{'is_read_only'});
            unset($data->{'is_read_only'});
        }
        if (property_exists($data, 'is_shared')) {
            $object->setIsShared($data->{'is_shared'});
            unset($data->{'is_shared'});
        }
        if (property_exists($data, 'last_read')) {
            $object->setLastRead($data->{'last_read'});
            unset($data->{'last_read'});
        }
        if (property_exists($data, 'latest')) {
            $object->setLatest($data->{'latest'});
            unset($data->{'latest'});
        }
        if (property_exists($data, 'members')) {
            $values = [];
            foreach ($data->{'members'} as $value) {
                $values[] = $value;
            }
            $object->setMembers($values);
            unset($data->{'members'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
            unset($data->{'name'});
        }
        if (property_exists($data, 'name_normalized')) {
            $object->setNameNormalized($data->{'name_normalized'});
            unset($data->{'name_normalized'});
        }
        if (property_exists($data, 'num_members')) {
            $object->setNumMembers($data->{'num_members'});
            unset($data->{'num_members'});
        }
        if (property_exists($data, 'pending_shared')) {
            $values_1 = [];
            foreach ($data->{'pending_shared'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPendingShared($values_1);
            unset($data->{'pending_shared'});
        }
        if (property_exists($data, 'pin_count')) {
            $object->setPinCount($data->{'pin_count'});
            unset($data->{'pin_count'});
        }
        if (property_exists($data, 'previous_names')) {
            $values_2 = [];
            foreach ($data->{'previous_names'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setPreviousNames($values_2);
            unset($data->{'previous_names'});
        }
        if (property_exists($data, 'priority')) {
            $object->setPriority($data->{'priority'});
            unset($data->{'priority'});
        }
        if (property_exists($data, 'purpose')) {
            $object->setPurpose($this->denormalizer->denormalize($data->{'purpose'}, 'JoliCode\\Slack\\Api\\Model\\ObjsConversationItem0Purpose', 'json', $context));
            unset($data->{'purpose'});
        }
        if (property_exists($data, 'shared_team_ids')) {
            $values_3 = [];
            foreach ($data->{'shared_team_ids'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setSharedTeamIds($values_3);
            unset($data->{'shared_team_ids'});
        }
        if (property_exists($data, 'shares')) {
            $values_4 = [];
            foreach ($data->{'shares'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'JoliCode\\Slack\\Api\\Model\\ObjsConversationItem0SharesItem', 'json', $context);
            }
            $object->setShares($values_4);
            unset($data->{'shares'});
        }
        if (property_exists($data, 'timezone_count')) {
            $object->setTimezoneCount($data->{'timezone_count'});
            unset($data->{'timezone_count'});
        }
        if (property_exists($data, 'topic')) {
            $object->setTopic($this->denormalizer->denormalize($data->{'topic'}, 'JoliCode\\Slack\\Api\\Model\\ObjsConversationItem0Topic', 'json', $context));
            unset($data->{'topic'});
        }
        if (property_exists($data, 'unlinked')) {
            $object->setUnlinked($data->{'unlinked'});
            unset($data->{'unlinked'});
        }
        if (property_exists($data, 'unread_count')) {
            $object->setUnreadCount($data->{'unread_count'});
            unset($data->{'unread_count'});
        }
        if (property_exists($data, 'unread_count_display')) {
            $object->setUnreadCountDisplay($data->{'unread_count_display'});
            unset($data->{'unread_count_display'});
        }
        if (property_exists($data, 'user')) {
            $object->setUser($data->{'user'});
            unset($data->{'user'});
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_5;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAcceptedUser()) {
            $data->{'accepted_user'} = $object->getAcceptedUser();
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getCreator()) {
            $data->{'creator'} = $object->getCreator();
        }
        if (null !== $object->getDisplayCounts()) {
            $data->{'display_counts'} = $this->normalizer->normalize($object->getDisplayCounts(), 'json', $context);
        }
        if (null !== $object->getHasPins()) {
            $data->{'has_pins'} = $object->getHasPins();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getIsArchived()) {
            $data->{'is_archived'} = $object->getIsArchived();
        }
        if (null !== $object->getIsChannel()) {
            $data->{'is_channel'} = $object->getIsChannel();
        }
        if (null !== $object->getIsExtShared()) {
            $data->{'is_ext_shared'} = $object->getIsExtShared();
        }
        if (null !== $object->getIsGeneral()) {
            $data->{'is_general'} = $object->getIsGeneral();
        }
        if (null !== $object->getIsGroup()) {
            $data->{'is_group'} = $object->getIsGroup();
        }
        if (null !== $object->getIsIm()) {
            $data->{'is_im'} = $object->getIsIm();
        }
        if (null !== $object->getIsMember()) {
            $data->{'is_member'} = $object->getIsMember();
        }
        if (null !== $object->getIsMoved()) {
            $data->{'is_moved'} = $object->getIsMoved();
        }
        if (null !== $object->getIsMpim()) {
            $data->{'is_mpim'} = $object->getIsMpim();
        }
        if (null !== $object->getIsOpen()) {
            $data->{'is_open'} = $object->getIsOpen();
        }
        if (null !== $object->getIsOrgShared()) {
            $data->{'is_org_shared'} = $object->getIsOrgShared();
        }
        if (null !== $object->getIsPendingExtShared()) {
            $data->{'is_pending_ext_shared'} = $object->getIsPendingExtShared();
        }
        if (null !== $object->getIsPrivate()) {
            $data->{'is_private'} = $object->getIsPrivate();
        }
        if (null !== $object->getIsReadOnly()) {
            $data->{'is_read_only'} = $object->getIsReadOnly();
        }
        if (null !== $object->getIsShared()) {
            $data->{'is_shared'} = $object->getIsShared();
        }
        if (null !== $object->getLastRead()) {
            $data->{'last_read'} = $object->getLastRead();
        }
        if (null !== $object->getLatest()) {
            $data->{'latest'} = $object->getLatest();
        }
        if (null !== $object->getMembers()) {
            $values = [];
            foreach ($object->getMembers() as $value) {
                $values[] = $value;
            }
            $data->{'members'} = $values;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getNameNormalized()) {
            $data->{'name_normalized'} = $object->getNameNormalized();
        }
        if (null !== $object->getNumMembers()) {
            $data->{'num_members'} = $object->getNumMembers();
        }
        if (null !== $object->getPendingShared()) {
            $values_1 = [];
            foreach ($object->getPendingShared() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'pending_shared'} = $values_1;
        }
        if (null !== $object->getPinCount()) {
            $data->{'pin_count'} = $object->getPinCount();
        }
        if (null !== $object->getPreviousNames()) {
            $values_2 = [];
            foreach ($object->getPreviousNames() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'previous_names'} = $values_2;
        }
        if (null !== $object->getPriority()) {
            $data->{'priority'} = $object->getPriority();
        }
        if (null !== $object->getPurpose()) {
            $data->{'purpose'} = $this->normalizer->normalize($object->getPurpose(), 'json', $context);
        }
        if (null !== $object->getSharedTeamIds()) {
            $values_3 = [];
            foreach ($object->getSharedTeamIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'shared_team_ids'} = $values_3;
        }
        if (null !== $object->getShares()) {
            $values_4 = [];
            foreach ($object->getShares() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'shares'} = $values_4;
        }
        if (null !== $object->getTimezoneCount()) {
            $data->{'timezone_count'} = $object->getTimezoneCount();
        }
        if (null !== $object->getTopic()) {
            $data->{'topic'} = $this->normalizer->normalize($object->getTopic(), 'json', $context);
        }
        if (null !== $object->getUnlinked()) {
            $data->{'unlinked'} = $object->getUnlinked();
        }
        if (null !== $object->getUnreadCount()) {
            $data->{'unread_count'} = $object->getUnreadCount();
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data->{'unread_count_display'} = $object->getUnreadCountDisplay();
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        }
        foreach ($object as $key => $value_5) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_5;
            }
        }

        return $data;
    }
}
