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

class ObjsTeamIconNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsTeamIcon';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\ObjsTeamIcon;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsTeamIcon();
        if (property_exists($data, 'image_102')) {
            $object->setImage102($data->{'image_102'});
        }
        if (property_exists($data, 'image_132')) {
            $object->setImage132($data->{'image_132'});
        }
        if (property_exists($data, 'image_230')) {
            $object->setImage230($data->{'image_230'});
        }
        if (property_exists($data, 'image_34')) {
            $object->setImage34($data->{'image_34'});
        }
        if (property_exists($data, 'image_44')) {
            $object->setImage44($data->{'image_44'});
        }
        if (property_exists($data, 'image_68')) {
            $object->setImage68($data->{'image_68'});
        }
        if (property_exists($data, 'image_88')) {
            $object->setImage88($data->{'image_88'});
        }
        if (property_exists($data, 'image_default')) {
            $object->setImageDefault($data->{'image_default'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getImage102()) {
            $data->{'image_102'} = $object->getImage102();
        }
        if (null !== $object->getImage132()) {
            $data->{'image_132'} = $object->getImage132();
        }
        if (null !== $object->getImage230()) {
            $data->{'image_230'} = $object->getImage230();
        }
        if (null !== $object->getImage34()) {
            $data->{'image_34'} = $object->getImage34();
        }
        if (null !== $object->getImage44()) {
            $data->{'image_44'} = $object->getImage44();
        }
        if (null !== $object->getImage68()) {
            $data->{'image_68'} = $object->getImage68();
        }
        if (null !== $object->getImage88()) {
            $data->{'image_88'} = $object->getImage88();
        }
        if (null !== $object->getImageDefault()) {
            $data->{'image_default'} = $object->getImageDefault();
        }

        return $data;
    }
}
