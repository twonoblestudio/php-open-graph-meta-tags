<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\ContextType;

/**
 * Music - playlist OpenGraph object
 */
class MusicPlaylist
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    private $song;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $disc;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $track;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $creator;

    /**
     * Undocumented function
     *
     * @param string $song
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicPlaylist
     */
    public function setSong(string $song): \TwoNobleStudio\OpenGraph\ContextType\MusicPlaylist
    {
        $this->song = $song;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param integer $disc
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicPlaylist
     */
    public function setDisc(int $disc): \TwoNobleStudio\OpenGraph\ContextType\MusicPlaylist
    {
        $this->disc = $disc;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param integer $track
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicPlaylist
     */
    public function setTrack(int $track): \TwoNobleStudio\OpenGraph\ContextType\MusicPlaylist
    {
        $this->track = $track;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $creator
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicPlaylist
     */
    public function setCreator(string $creator): \TwoNobleStudio\OpenGraph\ContextType\MusicPlaylist
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

        if ($this->song) {
            $result[] = ['property' => 'music:song', 'content' => $this->song];
        }

        if ($this->disc) {
            $result[] = ['property' => 'music:song:disc', 'content' => $this->disc];
        }

        if ($this->track) {
            $result[] = ['property' => 'music:song:track', 'content' => $this->track];
        }

        if ($this->creator) {
            $result[] = ['property' => 'music:creator', 'content' => $this->creator];
        }

        return $result;
    }
}
