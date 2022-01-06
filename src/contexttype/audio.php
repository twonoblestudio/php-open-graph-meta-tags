<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\ContextType;

/**
 * Audio OpenGraph object
 */
class Audio
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    private $audio;

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
     * Undocumented function
     *
     * @param string $audio
     * @return \TwoNobleStudio\OpenGraph\ContextType\Audio
     */
    public function setAudio(string $audio): \TwoNobleStudio\OpenGraph\ContextType\Audio
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $secureUrl
     * @return \TwoNobleStudio\OpenGraph\ContextType\Audio
     */
    public function setSecureUrl(string $secureUrl): \TwoNobleStudio\OpenGraph\ContextType\Audio
    {
        $this->secureUrl = $secureUrl;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $type
     * @return \TwoNobleStudio\OpenGraph\ContextType\Audio
     */
    public function setType(string $type): \TwoNobleStudio\OpenGraph\ContextType\Audio
    {
        $this->type = $type;

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

        if ($this->audio) {
            $result[] = ['property' => 'og:audio', 'content' => $this->video];
        }

        if ($this->secureUrl) {
            $result[] = ['property' => 'og:audio:secure_url', 'content' => $this->secureUrl];
        }

        if ($this->type) {
            $result[] = ['property' => 'og:audio:type', 'content' => $this->type];
        }

        return $result;
    }
}
