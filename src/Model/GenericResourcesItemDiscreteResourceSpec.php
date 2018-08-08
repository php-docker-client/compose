<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\Compose\Model;

class GenericResourcesItemDiscreteResourceSpec
{
    /**
     * @var string
     */
    protected $kind;
    /**
     * @var float
     */
    protected $value;

    /**
     * @return string
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * @param string $kind
     *
     * @return self
     */
    public function setKind(?string $kind): self
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * @return float
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * @param float $value
     *
     * @return self
     */
    public function setValue(?float $value): self
    {
        $this->value = $value;

        return $this;
    }
}
