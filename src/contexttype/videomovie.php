<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\ContextType;

/**
 * Video - movie OpenGraph object
 */
class VideoMovie
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
     * @var array
     */
    private $role;

    /**
     * Undocumented variable
     *
     * @var array
     */
    private $director = [];

    /**
     * Undocumented variable
     *
     * @var array
     */
    private $writer = [];

    /**
     * Undocumented variable
     *
     * @var array
     */
    private $duration;

    /**
     * Undocumented variable
     *
     * @var array
     */
    private $releaseDate;

    /**
     * Undocumented variable
     *
     * @var array
     */
    private $tag = [];

    /**
     * Undocumented function
     *
     * @param string $actor
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
     */
    public function setActor(string $actor): \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
    {
        $this->actor[] = $actor;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $role
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
     */
    public function setRole(string $role): \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $director
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
     */
    public function setDirector(string $director): \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
    {
        $this->director[] = $director;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $writer
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
     */
    public function setWriter(string $writer): \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
    {
        $this->writer[] = $writer;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param integer $duration
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
     */
    public function setDuration(int $duration): \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param \DateTime $releaseDate
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
     */
    public function setReleaseDate(\DateTime $releaseDate): \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $tag
     * @return \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
     */
    public function setTag(string $tag): \TwoNobleStudio\OpenGraph\ContextType\VideoMovie
    {
        $this->tag[] = $tag;

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

        return $result;
    }
}
