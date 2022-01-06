<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\ContextType;

/**
 * Video - episode OpenGraph object
 */
class VideoEpisode
{
    /**
     * Undocumented variable
     *
     * @var array
     */
    private $actor = [];

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $role;

    /**
     * Undocumented variable
     *
     * @var string[]
     */
    private $director = [];

    /**
     * Undocumented variable
     *
     * @var string[]
     */
    private $writer = [];

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $duration;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $releaseDate;

    /**
     * Undocumented variable
     *
     * @var string[]
     */
    private $tag = [];

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $series;

    /**
     * Undocumented function
     *
     * @param string $actor
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
     */
    public function setActor(string $actor): \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
    {
        $this->actor[] = $actor;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $role
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
     */
    public function setRole(string $role): \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $director
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
     */
    public function setDirector(string $director): \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
    {
        $this->director[] = $director;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $writer
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
     */
    public function setWriter(string $writer): \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
    {
        $this->writer[] = $writer;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param integer $duration
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
     */
    public function setDuration(int $duration): \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param \DateTime $releaseDate
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
     */
    public function setReleaseDate(\DateTime $releaseDate): \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $tag
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
     */
    public function setTag(string $tag): \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
    {
        $this->tag[] = $tag;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $series
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
     */
    public function setSeries(string $series): \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode
    {
        $this->series = $series;

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

        foreach ($this->actor as $actor) {
            $result[] = ['property' => 'video:actor', 'content' => $actor];
        }

        if ($this->role) {
            $result[] = ['property' => 'video:actor:role', 'content' => $this->role];
        }

        foreach ($this->director as $director) {
            $result[] = ['property' => 'video:director', 'content' => $director];
        }

        foreach ($this->writer as $writer) {
            $result[] = ['property' => 'video:writer', 'content' => $writer];
        }

        if ($this->duration) {
            $result[] = ['property' => 'video:duration', 'content' => $this->duration];
        }

        if ($this->releaseDate instanceof \DateTime) {
            $result[] = ['property' => 'video:release_date', 'content' => $this->releaseDate];
        }

        foreach ($this->tag as $tag) {
            $result[] = ['property' => 'video:tag', 'content' => $tag];
        }

        if ($this->series) {
            $result[] = ['property' => 'video:series', 'content' => $this->series];
        }

        return $result;
    }
}
