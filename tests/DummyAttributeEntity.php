<?php

namespace Vich\UploaderBundle\Tests;

use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @author Mathieu Petrini
 */
#[Vich\Uploadable]
class DummyAttributeEntity
{
    /**
     * @var object|null
     */
    #[Vich\UploadableField(mapping: 'dummy_file', fileNameProperty: 'fileName')]
    protected $file;

    /** @var string|null */
    protected $fileName;

    /** @var int|null */
    protected $size;

    /** @var string|null */
    public $someProperty;

    public function getFile(): ?object
    {
        return $this->file;
    }

    public function setFile(?object $file): void
    {
        $this->file = $file;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): void
    {
        $this->fileName = $fileName;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): void
    {
        $this->size = $size;
    }

    public function generateFileName(): string
    {
        return 'generated-file-name';
    }
}
