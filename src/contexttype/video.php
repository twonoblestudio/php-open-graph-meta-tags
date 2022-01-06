<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\ContextType;

/**
 * Video OpenGraph object
 */
class Video
{
    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $video;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $secureUrl;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $type;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $width;

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $height;

    /**
     * Undocumented function
     *
     * @param string $video
     * @return \TwoNobleStudio\OpenGraph\ContextType\Video
     */
    public function setVideo(string $video): \TwoNobleStudio\OpenGraph\ContextType\Video
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $secureUrl
     * @return \TwoNobleStudio\OpenGraph\ContextType\Video
     */
    public function setSecureUrl(string $secureUrl): \TwoNobleStudio\OpenGraph\ContextType\Video
    {
        $this->secureUrl = $secureUrl;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $type
     * @return \TwoNobleStudio\OpenGraph\ContextType\Video
     */
    public function setType(string $type): \TwoNobleStudio\OpenGraph\ContextType\Video
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param integer $width
     * @return \TwoNobleStudio\OpenGraph\ContextType\Video
     */
    public function setWidth(int $width): \TwoNobleStudio\OpenGraph\ContextType\Video
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param integer $height
     * @return \TwoNobleStudio\OpenGraph\ContextType\Video
     */
    public function setHeight(int $height): \TwoNobleStudio\OpenGraph\ContextType\Video
    {
        $this->height = $height;

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

        if ($this->video) {
            $result[] = ['property' => 'og:video', 'content' => $this->video];
        }

        if ($this->secureUrl) {
            $result[] = ['property' => 'og:video:secure_url', 'content' => $this->secureUrl];
        }

        if ($this->type) {
            $result[] = ['property' => 'og:video:type', 'content' => $this->type];
        }

        if ($this->width) {
            $result[] = ['property' => 'og:video:width', 'content' => $this->width];
        }

        if ($this->height) {
            $result[] = ['property' => 'og:video:height', 'content' => $this->height];
        }

        return $result;
    }
}
