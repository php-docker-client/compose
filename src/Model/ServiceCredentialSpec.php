<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\Compose\Model;

class ServiceCredentialSpec
{
    /**
     * @var string
     */
    protected $file;
    /**
     * @var string
     */
    protected $registry;

    /**
     * @return string
     */
    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * @param string $file
     *
     * @return self
     */
    public function setFile(?string $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegistry(): ?string
    {
        return $this->registry;
    }

    /**
     * @param string $registry
     *
     * @return self
     */
    public function setRegistry(?string $registry): self
    {
        $this->registry = $registry;

        return $this;
    }
}