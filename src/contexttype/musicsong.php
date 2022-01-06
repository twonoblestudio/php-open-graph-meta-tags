<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\ContextType;

/**
 * Music - song OpenGraph object
 */
class MusicSong
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    private $duration;

    /**
     * Undocumented variable
     *
     * @var array
     */
    private $album = [];

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
     * @var array
     */
    private $musician = [];

    /**
     * Undocumented function
     *
     * @param integer $duration
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicSong
     */
    public function setDuration(int $duration): \TwoNobleStudio\OpenGraph\ContextType\MusicSong
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $album
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicSong
     */
    public function setAlbum(string $album): \TwoNobleStudio\OpenGraph\ContextType\MusicSong
    {
        $this->album[] = $album;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param integer $disc
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicSong
     */
    public function setDisc(int $disc): \TwoNobleStudio\OpenGraph\ContextType\MusicSong
    {
        $this->disc = $disc;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param integer $track
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicSong
     */
    public function setTrack(int $track): \TwoNobleStudio\OpenGraph\ContextType\MusicSong
    {
        $this->track = $track;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $musician
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicSong
     */
    public function setMusician(string $musician): \TwoNobleStudio\OpenGraph\ContextType\MusicSong
    {
        $this->musician[] = $musician;

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

        if ($this->duration) {
            $result[] = ['property' => 'music:duration', 'content' => $this->duration];
        }

        foreach ($this->album as $album) {
            $result[] = ['property' => 'music:album', 'content' => $album];
        }

        if ($this->disc) {
            $result[] = ['property' => 'music:album:disc', 'content' => $this->disc];
        }

        if ($this->track) {
            $result[] = ['property' => 'music:album:track', 'content' => $this->track];
        }

        foreach ($this->musician as $musician) {
            $result[] = ['property' => 'music:musician', 'content' => $musician];
        }

        return $result;
    }
}
