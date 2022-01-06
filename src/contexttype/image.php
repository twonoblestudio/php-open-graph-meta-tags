<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\ContextType;

/**
 * Image OpenGraph object
 */
class Image
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    private $image;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $secureUrl;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $type;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $width;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $height;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $alt;

    /**
     * Undocumented function
     *
     * @param string $image
     * @return \TwoNobleStudio\OpenGraph\ContextType\Image
     */
    public function setImage(string $image): \TwoNobleStudio\OpenGraph\ContextType\Image
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $secureUrl
     * @return \TwoNobleStudio\OpenGraph\ContextType\Image
     */
    public function setSecureUrl(string $secureUrl): \TwoNobleStudio\OpenGraph\ContextType\Image
    {
        $this->secureUrl = $secureUrl;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $type
     * @return \TwoNobleStudio\OpenGraph\ContextType\Image
     */
    public function setType(string $type): \TwoNobleStudio\OpenGraph\ContextType\Image
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param integer $width
     * @return \TwoNobleStudio\OpenGraph\ContextType\Image
     */
    public function setWidth(int $width): \TwoNobleStudio\OpenGraph\ContextType\Image
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param integer $height
     * @return \TwoNobleStudio\OpenGraph\ContextType\Image
     */
    public function setHeight(int $height): \TwoNobleStudio\OpenGraph\ContextType\Image
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $alt
     * @return \TwoNobleStudio\OpenGraph\ContextType\Image
     */
    public function setAlt(string $alt): \TwoNobleStudio\OpenGraph\ContextType\Image
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getProperties(): array
    {
        $result = [];

        // og:image:url is identical to og:image
        if ($this->image) {
            $result[] = ['property' => 'og:image:url', 'content' => $this->image];
        }

        if ($this->secureUrl) {
            $result[] = ['property' => 'og:image:secure_url', 'content' => $this->secureUrl];
        }

        if ($this->type) {
            $result[] = ['property' => 'og:image:type', 'content' => $this->type];
        }

        if ($this->width) {
            $result[] = ['property' => 'og:image:width', 'content' => $this->width];
        }

        if ($this->height) {
            $result[] = ['property' => 'og:image:height', 'content' => $this->height];
        }

        if ($this->alt) {
            $result[] = ['property' => 'og:image:alt', 'content' => $this->alt];
        }

        return $result;
    }
}
