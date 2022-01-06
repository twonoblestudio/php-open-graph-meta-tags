<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\ContextType;

/**
 * Book OpenGraph object
 */
class Book
{
    /**
     * Undocumented variable
     *
     * @var array
     */
    private $author = [];

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $isbn;

    /**
     * Undocumented variable
     *
     * @var \DateTime
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
     * @param string $author
     * @return \TwoNobleStudio\OpenGraph\ContextType\Book
     */
    public function setAuthor(string $author): \TwoNobleStudio\OpenGraph\ContextType\Book
    {
        $this->author[] = $author;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $isbn
     * @return \TwoNobleStudio\OpenGraph\ContextType\Book
     */
    public function setIsbn(string $isbn): \TwoNobleStudio\OpenGraph\ContextType\Book
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param \DateTime $releaseDate
     * @return \TwoNobleStudio\OpenGraph\ContextType\Book
     */
    public function setReleaseDate(\DateTime $releaseDate): \TwoNobleStudio\OpenGraph\ContextType\Book
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $tag
     * @return \TwoNobleStudio\OpenGraph\ContextType\Book
     */
    public function setTag(string $tag): \TwoNobleStudio\OpenGraph\ContextType\Book
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

        foreach ($this->author as $author) {
            $result[] = ['property' => 'book:author', 'content' => $author];
        }

        if ($this->isbn) {
            $result[] = ['property' => 'book:isbn', 'content' => $this->isbn];
        }

        if ($this->releaseDate instanceof \DateTime) {
            $result[] = ['property' => 'book:release_date', 'content' => $this->releaseDate->format('Y-m-d\TH:i:s')];
        }

        foreach ($this->tag as $tag) {
            $result[] = ['property' => 'book:tag', 'content' => $tag];
        }

        return $result;
    }
}
