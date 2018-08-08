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

class FileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DockerPhpClient\\Compose\\Model\\File';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \DockerPhpClient\Compose\Model\File;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Compose\Model\File();
        $data = clone $data;
        if (property_exists($data, 'version') && $data->{'version'} !== null) {
            $object->setVersion($data->{'version'});
            unset($data->{'version'});
        }
        if (property_exists($data, 'services') && $data->{'services'} !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'services'} as $key => $value) {
                if (preg_match('/^[a-zA-Z0-9._-]+$/', $key) && is_object($value)) {
                    $values[$key] = $this->denormalizer->denormalize($value, 'DockerPhpClient\\Compose\\Model\\Service', 'json', $context);
                    continue;
                }
            }
            $object->setServices($values);
            unset($data->{'services'});
        }
        if (property_exists($data, 'networks') && $data->{'networks'} !== null) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'networks'} as $key_1 => $value_1) {
                if (preg_match('/^[a-zA-Z0-9._-]+$/', $key_1) && array_key_exists($key_1, $value_1)) {
                    $value_2 = $value_1;
                    if (is_object($value_1)) {
                        $value_2 = $value_1;
                    } elseif (is_null($value_1)) {
                        $value_2 = $value_1;
                    }
                    $values_1[$key_1] = $value_2;
                    continue;
                }
            }
            $object->setNetworks($values_1);
            unset($data->{'networks'});
        }
        if (property_exists($data, 'volumes') && $data->{'volumes'} !== null) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'volumes'} as $key_2 => $value_3) {
                if (preg_match('/^[a-zA-Z0-9._-]+$/', $key_2) && array_key_exists($key_2, $value_3)) {
                    $value_4 = $value_3;
                    if (is_object($value_3)) {
                        $value_4 = $value_3;
                    } elseif (is_null($value_3)) {
                        $value_4 = $value_3;
                    }
                    $values_2[$key_2] = $value_4;
                    continue;
                }
            }
            $object->setVolumes($values_2);
            unset($data->{'volumes'});
        }
        if (property_exists($data, 'secrets') && $data->{'secrets'} !== null) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'secrets'} as $key_3 => $value_5) {
                if (preg_match('/^[a-zA-Z0-9._-]+$/', $key_3) && is_object($value_5)) {
                    $values_3[$key_3] = $this->denormalizer->denormalize($value_5, 'DockerPhpClient\\Compose\\Model\\Secret', 'json', $context);
                    continue;
                }
            }
            $object->setSecrets($values_3);
            unset($data->{'secrets'});
        }
        if (property_exists($data, 'configs') && $data->{'configs'} !== null) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'configs'} as $key_4 => $value_6) {
                if (preg_match('/^[a-zA-Z0-9._-]+$/', $key_4) && is_object($value_6)) {
                    $values_4[$key_4] = $this->denormalizer->denormalize($value_6, 'DockerPhpClient\\Compose\\Model\\Config', 'json', $context);
                    continue;
                }
            }
            $object->setConfigs($values_4);
            unset($data->{'configs'});
        }
        foreach ($data as $key_5 => $value_7) {
            if (preg_match('/^x-/', $key_5)) {
                $object[$key_5] = $value_7;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        }
        if (null !== $object->getServices()) {
            $values = new \stdClass();
            foreach ($object->getServices() as $key => $value) {
                if (preg_match('/^[a-zA-Z0-9._-]+$/', $key) && is_object($value)) {
                    $values->{$key} = $this->normalizer->normalize($value, 'json', $context);
                    continue;
                }
            }
            $data->{'services'} = $values;
        }
        if (null !== $object->getNetworks()) {
            $values_1 = new \stdClass();
            foreach ($object->getNetworks() as $key_1 => $value_1) {
                if (preg_match('/^[a-zA-Z0-9._-]+$/', $key_1) && !is_null($value_1)) {
                    $value_2 = $value_1;
                    if (is_object($value_1)) {
                        $value_2 = $value_1;
                    }
                    if (is_null($value_1)) {
                        $value_2 = $value_1;
                    }
                    $values_1->{$key_1} = $value_2;
                    continue;
                }
            }
            $data->{'networks'} = $values_1;
        }
        if (null !== $object->getVolumes()) {
            $values_2 = new \stdClass();
            foreach ($object->getVolumes() as $key_2 => $value_3) {
                if (preg_match('/^[a-zA-Z0-9._-]+$/', $key_2) && !is_null($value_3)) {
                    $value_4 = $value_3;
                    if (is_object($value_3)) {
                        $value_4 = $value_3;
                    }
                    if (is_null($value_3)) {
                        $value_4 = $value_3;
                    }
                    $values_2->{$key_2} = $value_4;
                    continue;
                }
            }
            $data->{'volumes'} = $values_2;
        }
        if (null !== $object->getSecrets()) {
            $values_3 = new \stdClass();
            foreach ($object->getSecrets() as $key_3 => $value_5) {
                if (preg_match('/^[a-zA-Z0-9._-]+$/', $key_3) && is_object($value_5)) {
                    $values_3->{$key_3} = $this->normalizer->normalize($value_5, 'json', $context);
                    continue;
                }
            }
            $data->{'secrets'} = $values_3;
        }
        if (null !== $object->getConfigs()) {
            $values_4 = new \stdClass();
            foreach ($object->getConfigs() as $key_4 => $value_6) {
                if (preg_match('/^[a-zA-Z0-9._-]+$/', $key_4) && is_object($value_6)) {
                    $values_4->{$key_4} = $this->normalizer->normalize($value_6, 'json', $context);
                    continue;
                }
            }
            $data->{'configs'} = $values_4;
        }
        foreach ($object as $key_5 => $value_7) {
            if (preg_match('/^x-/', $key_5)) {
                $data->{$key_5} = $value_7;
            }
        }

        return $data;
    }
}
