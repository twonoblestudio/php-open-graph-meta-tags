<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\ContextType;

/**
 * Music - album OpenGraph object
 */
class MusicAlbum
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
    private $musician;

    /**
     * Undocumented variable
     *
     * @var \DateTime
     */
    private $releaseDate;

    /**
     * Undocumented function
     *
     * @param string $song
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicAlbum
     */
    public function setSong(string $song): \TwoNobleStudio\OpenGraph\ContextType\MusicAlbum
    {
        $this->song = $song;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param integer $disc
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicAlbum
     */
    public function setDisc(int $disc): \TwoNobleStudio\OpenGraph\ContextType\MusicAlbum
    {
        $this->disc = $disc;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param integer $track
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicAlbum
     */
    public function setTrack(int $track): \TwoNobleStudio\OpenGraph\ContextType\MusicAlbum
    {
        $this->track = $track;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $musician
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicAlbum
     */
    public function setMusician(string $musician): \TwoNobleStudio\OpenGraph\ContextType\MusicAlbum
    {
        $this->musician = $musician;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param \DateTime $releaseDate
     * @return \TwoNobleStudio\OpenGraph\ContextType\MusicAlbum
     */
    public function setReleaseDate(\DateTime $releaseDate): \TwoNobleStudio\OpenGraph\ContextType\MusicAlbum
    {
        $this->releaseDate = $releaseDate;

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

        if ($this->musician) {
            $result[] = ['property' => 'music:musician', 'content' => $this->musician];
        }

        if ($this->releaseDate instanceof \DateTime) {
            $result[] = ['property' => 'music:release_date', 'content' => $this->releaseDate->format('Y-m-d\TH:i:s')];
        }

        return $result;
    }
}
