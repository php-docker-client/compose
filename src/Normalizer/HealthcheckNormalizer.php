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

class HealthcheckNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DockerPhpClient\\Compose\\Model\\Healthcheck';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \DockerPhpClient\Compose\Model\Healthcheck;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Compose\Model\Healthcheck();
        if (property_exists($data, 'disable') && $data->{'disable'} !== null) {
            $object->setDisable($data->{'disable'});
        }
        if (property_exists($data, 'interval') && $data->{'interval'} !== null) {
            $object->setInterval($data->{'interval'});
        }
        if (property_exists($data, 'retries') && $data->{'retries'} !== null) {
            $object->setRetries($data->{'retries'});
        }
        if (property_exists($data, 'test') && $data->{'test'} !== null) {
            $value = $data->{'test'};
            if (is_string($data->{'test'})) {
                $value = $data->{'test'};
            } elseif (is_array($data->{'test'})) {
                $values = [];
                foreach ($data->{'test'} as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            }
            $object->setTest($value);
        }
        if (property_exists($data, 'timeout') && $data->{'timeout'} !== null) {
            $object->setTimeout($data->{'timeout'});
        }
        if (property_exists($data, 'start_period') && $data->{'start_period'} !== null) {
            $object->setStartPeriod($data->{'start_period'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDisable()) {
            $data->{'disable'} = $object->getDisable();
        }
        if (null !== $object->getInterval()) {
            $data->{'interval'} = $object->getInterval();
        }
        if (null !== $object->getRetries()) {
            $data->{'retries'} = $object->getRetries();
        }
        if (null !== $object->getTest()) {
            $value = $object->getTest();
            if (is_string($object->getTest())) {
                $value = $object->getTest();
            }
            if (is_array($object->getTest())) {
                $values = [];
                foreach ($object->getTest() as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            }
            $data->{'test'} = $value;
        }
        if (null !== $object->getTimeout()) {
            $data->{'timeout'} = $object->getTimeout();
        }
        if (null !== $object->getStartPeriod()) {
            $data->{'start_period'} = $object->getStartPeriod();
        }

        return $data;
    }
}
