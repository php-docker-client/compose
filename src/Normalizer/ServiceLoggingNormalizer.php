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

class ServiceLoggingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DockerPhpClient\\Compose\\Model\\ServiceLogging';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \DockerPhpClient\Compose\Model\ServiceLogging;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Compose\Model\ServiceLogging();
        if (property_exists($data, 'driver') && $data->{'driver'} !== null) {
            $object->setDriver($data->{'driver'});
        }
        if (property_exists($data, 'options') && $data->{'options'} !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'options'} as $key => $value) {
                if (preg_match('/^.+$/', $key) && array_key_exists($key, $data->{'options'})) {
                    $value_1 = $value;
                    if (is_string($value)) {
                        $value_1 = $value;
                    } elseif (is_float($value)) {
                        $value_1 = $value;
                    } elseif (is_null($value)) {
                        $value_1 = $value;
                    }
                    $values[$key] = $value_1;
                    continue;
                }
            }
            $object->setOptions($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDriver()) {
            $data->{'driver'} = $object->getDriver();
        }
        if (null !== $object->getOptions()) {
            $values = new \stdClass();
            foreach ($object->getOptions() as $key => $value) {
                if (preg_match('/^.+$/', $key) && !is_null($value)) {
                    $value_1 = $value;
                    if (is_string($value)) {
                        $value_1 = $value;
                    }
                    if (is_float($value)) {
                        $value_1 = $value;
                    }
                    if (is_null($value)) {
                        $value_1 = $value;
                    }
                    $values->{$key} = $value_1;
                    continue;
                }
            }
            $data->{'options'} = $values;
        }

        return $data;
    }
}
