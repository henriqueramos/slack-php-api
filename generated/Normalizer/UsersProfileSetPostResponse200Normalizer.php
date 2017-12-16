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

class UsersProfileSetPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\UsersProfileSetPostResponse200';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\UsersProfileSetPostResponse200;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\UsersProfileSetPostResponse200();
        $data = clone $data;
        if (property_exists($data, 'ok')) {
            $object->setOk($data->{'ok'});
            unset($data->{'ok'});
        }
        if (property_exists($data, 'profile')) {
            $object->setProfile($this->denormalizer->denormalize($data->{'profile'}, 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfile', 'json', $context));
            unset($data->{'profile'});
        }
        if (property_exists($data, 'username')) {
            $object->setUsername($data->{'username'});
            unset($data->{'username'});
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
        if (null !== $object->getOk()) {
            $data->{'ok'} = $object->getOk();
        }
        if (null !== $object->getProfile()) {
            $data->{'profile'} = $this->normalizer->normalize($object->getProfile(), 'json', $context);
        }
        if (null !== $object->getUsername()) {
            $data->{'username'} = $object->getUsername();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value;
            }
        }

        return $data;
    }
}
