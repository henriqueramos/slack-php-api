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

class GroupsHistoryGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\GroupsHistoryGetResponse200';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\GroupsHistoryGetResponse200;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\GroupsHistoryGetResponse200();
        $data = clone $data;
        if (property_exists($data, 'has_more')) {
            $object->setHasMore($data->{'has_more'});
            unset($data->{'has_more'});
        }
        if (property_exists($data, 'messages')) {
            $values = [];
            foreach ($data->{'messages'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsMessage', 'json', $context);
            }
            $object->setMessages($values);
            unset($data->{'messages'});
        }
        if (property_exists($data, 'ok')) {
            $object->setOk($data->{'ok'});
            unset($data->{'ok'});
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_1;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getHasMore()) {
            $data->{'has_more'} = $object->getHasMore();
        }
        if (null !== $object->getMessages()) {
            $values = [];
            foreach ($object->getMessages() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'messages'} = $values;
        }
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_1;
            }
        }

        return $data;
    }
}
