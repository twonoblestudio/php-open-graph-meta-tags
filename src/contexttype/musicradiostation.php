<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\ContextType;

/**
 * Music - radio station OpenGraph object
 */
class MusicRadioStation
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    private $creator;

    /**
     * Undocumented function
     *
     * @param string $creator
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicRadioStation
     */
    public function setCreator(string $creator): \TwoNobleStudio\OpenGraph\ContextType\MusicRadioStation
    {
        $this->creator = $creator;

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

        if ($this->creator) {
            $result[] = ['property' => 'music:creator', 'content' => $this->creator];
        }

        return $result;
    }
}
