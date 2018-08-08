<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace DockerPhpClient\Compose\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SecretNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DockerPhpClient\\Compose\\Model\\Secret';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \DockerPhpClient\Compose\Model\Secret;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Compose\Model\Secret();
        $data = clone $data;
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
            unset($data->{'name'});
        }
        if (property_exists($data, 'file') && $data->{'file'} !== null) {
            $object->setFile($data->{'file'});
            unset($data->{'file'});
        }
        if (property_exists($data, 'external') && $data->{'external'} !== null) {
            $value = $data->{'external'};
            if (is_bool($data->{'external'})) {
                $value = $data->{'external'};
            } elseif (is_object($data->{'external'})) {
                $value = $data->{'external'};
            }
            $object->setExternal($value);
            unset($data->{'external'});
        }
        if (property_exists($data, 'labels') && $data->{'labels'} !== null) {
            $value_1 = $data->{'labels'};
            if (isset($data->{'labels'})) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data->{'labels'} as $key => $value_2) {
                    if (preg_match('/.+/', $key) && array_key_exists($key, $data->{'labels'})) {
                        $value_3 = $value_2;
                        if (is_string($value_2)) {
                            $value_3 = $value_2;
                        } elseif (is_float($value_2)) {
                            $value_3 = $value_2;
                        } elseif (is_null($value_2)) {
                            $value_3 = $value_2;
                        }
                        $values[$key] = $value_3;
                        continue;
                    }
                }
                $value_1 = $values;
            } elseif (is_array($data->{'labels'})) {
                $values_1 = [];
                foreach ($data->{'labels'} as $value_4) {
                    $values_1[] = $value_4;
                }
                $value_1 = $values_1;
            }
            $object->setLabels($value_1);
            unset($data->{'labels'});
        }
        foreach ($data as $key_1 => $value_5) {
            if (preg_match('/^x-/', $key_1)) {
                $object[$key_1] = $value_5;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getFile()) {
            $data->{'file'} = $object->getFile();
        }
        if (null !== $object->getExternal()) {
            $value = $object->getExternal();
            if (is_bool($object->getExternal())) {
                $value = $object->getExternal();
            }
            if (is_object($object->getExternal())) {
                $value = $object->getExternal();
            }
            $data->{'external'} = $value;
        }
        if (null !== $object->getLabels()) {
            $value_1 = $object->getLabels();
            if (!is_null($object->getLabels())) {
                $values = new \stdClass();
                foreach ($object->getLabels() as $key => $value_2) {
                    if (preg_match('/.+/', $key) && !is_null($value_2)) {
                        $value_3 = $value_2;
                        if (is_string($value_2)) {
                            $value_3 = $value_2;
                        }
                        if (is_float($value_2)) {
                            $value_3 = $value_2;
                        }
                        if (is_null($value_2)) {
                            $value_3 = $value_2;
                        }
                        $values->{$key} = $value_3;
                        continue;
                    }
                }
                $value_1 = $values;
            }
            if (is_array($object->getLabels())) {
                $values_1 = [];
                foreach ($object->getLabels() as $value_4) {
                    $values_1[] = $value_4;
                }
                $value_1 = $values_1;
            }
            $data->{'labels'} = $value_1;
        }
        foreach ($object as $key_1 => $value_5) {
            if (preg_match('/^x-/', $key_1)) {
                $data->{$key_1} = $value_5;
            }
        }

        return $data;
    }
}
