<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\ContextType;

/**
 * Article OpenGraph object
 */
class Article
{
    /**
     * Article published date time
     *
     * @var \DateTime
     */
    private $publishedTime;

    /**
     * Article modification date time
     *
     * @var \DateTime
     */
    private $modifiedTime;

    /**
     * Article expiration date time
     *
     * @var \DateTime
     */
    private $expirationTime;

    /**
     * Article authors
     *
     * @var array
     */
    private $author = [];

    /**
     * Article section (category) name
     *
     * @var string
     */
    private $section;

    /**
     * Article tags associated with the article
     *
     * @var array
     */
    private $tag = [];

    /**
     * Undocumented function
     *
     * @param \DateTime $publishedTime
     * @return \TwoNobleStudio\OpenGraph\ContextType\Article
     */
    public function setPublishedTime(\DateTime $publishedTime): \TwoNobleStudio\OpenGraph\ContextType\Article
    {
        $this->publishedTime = $publishedTime;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param \DateTime $modifiedTime
     * @return \TwoNobleStudio\OpenGraph\ContextType\Article
     */
    public function setModifiedTime(\DateTime $modifiedTime): \TwoNobleStudio\OpenGraph\ContextType\Article
    {
        $this->modifiedTime = $modifiedTime;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param \DateTime $expirationTime
     * @return \TwoNobleStudio\OpenGraph\ContextType\Article
     */
    public function setExpirationTime(\DateTime $expirationTime): \TwoNobleStudio\OpenGraph\ContextType\Article
    {
        $this->expirationTime = $expirationTime;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $author
     * @return \TwoNobleStudio\OpenGraph\ContextType\Article
     */
    public function setAuthor(string $author): \TwoNobleStudio\OpenGraph\ContextType\Article
    {
        $this->author[] = $author;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $section
     * @return \TwoNobleStudio\OpenGraph\ContextType\Article
     */
    public function setSection(string $section): \TwoNobleStudio\OpenGraph\ContextType\Article
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $tag
     * @return \TwoNobleStudio\OpenGraph\ContextType\Article
     */
    public function setTag(string $tag): \TwoNobleStudio\OpenGraph\ContextType\Article
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

        if ($this->publishedTime instanceof \DateTime) {
            $result[] = ['property' => 'article:published_time', 'content' => $this->publishedTime->format('Y-m-d\TH:i:s')];
        }

        if ($this->modifiedTime instanceof \DateTime) {
            $result[] = ['property' => 'article:modified_time', 'content' => $this->modifiedTime->format('Y-m-d\TH:i:s')];
        }

        if ($this->expirationTime instanceof \DateTime) {
            $result[] = ['property' => 'article:expiration_time', 'content' => $this->expirationTime->format('Y-m-d\TH:i:s')];
        }

        foreach ($this->author as $author) {
            $result[] = ['property' => 'article:author', 'content' => $author];
        }

        if ($this->section) {
            $result[] = ['property' => 'article:section', 'content' => $this->section];
        }

        foreach ($this->tag as $tag) {
            $result[] = ['property' => 'article:tag', 'content' => $tag];
        }

        return $result;
    }
}
