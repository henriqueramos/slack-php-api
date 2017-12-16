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

class ObjsConversationItem1PurposeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsConversationItem1Purpose';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\ObjsConversationItem1Purpose;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsConversationItem1Purpose();
        $data = clone $data;
        if (property_exists($data, 'creator')) {
            $object->setCreator($data->{'creator'});
            unset($data->{'creator'});
        }
        if (property_exists($data, 'last_set')) {
            $object->setLastSet($data->{'last_set'});
            unset($data->{'last_set'});
        }
        if (property_exists($data, 'value')) {
            $object->setValue($data->{'value'});
            unset($data->{'value'});
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreator()) {
            $data->{'creator'} = $object->getCreator();
        }
        if (null !== $object->getLastSet()) {
            $data->{'last_set'} = $object->getLastSet();
        }
        if (null !== $object->getValue()) {
            $data->{'value'} = $object->getValue();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value;
            }
        }

        return $data;
    }
}
