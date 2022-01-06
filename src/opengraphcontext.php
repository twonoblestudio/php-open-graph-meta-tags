<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph;

class OpenGraphContext
{
    /**
     * @var string[]
     */
    const NAMESPACES = [
        'og' => 'og https://ogp.me/ns#',
        'fb' => 'fb https://ogp.me/ns/fb#',
        'music.song' => 'music https://ogp.me/ns/music#',
        'music.album' => 'music https://ogp.me/ns/music#',
        'music.playlist' => 'music https://ogp.me/ns/music#',
        'music.radio_station' => 'music https://ogp.me/ns/music#',
        'video.movie' => 'video https://ogp.me/ns/video#',
        'video.episode' => 'video https://ogp.me/ns/video#',
        'video.tv_show' => 'video https://ogp.me/ns/video#',
        'video.other' => 'video https://ogp.me/ns/video#',
        'article' => 'article https://ogp.me/ns/article#',
        'book' => 'book https://ogp.me/ns/book#',
        'profile' => 'profile https://ogp.me/ns/profile#',
        'website' => 'website https://ogp.me/ns/website#',
        'product' => 'product: http://ogp.me/ns/product#',
    ];

    /**
     * OpenGraph object type
     *
     * @var string
     */
    private $type = 'website';

    /**
     * OpenGraph object title
     *
     * @var string
     */
    private $title;

    /**
     * OpenGraph object site name
     *
     * @var string
     */
    private $siteName;

    /**
     * OpenGraph object description
     *
     * @var string
     */
    private $description;

    /**
     * OpenGraph object locale
     *
     * @var string
     */
    private $locale = 'en_US';

    /**
     * OpenGraph object alternate locale
     *
     * @var array
     */
    private $localeAlternate = [];

    /**
     * OpenGraph object determiner
     *
     * @var array
     */
    private $determiner = [];

    /**
     * OpenGraph object canonical URL
     *
     * @var string
     */
    private $url;

    /**
     * OpenGraph object publish date
     *
     * @var \DateTime
     */
    private $publishDate;

    /**
     * OpenGraph object Facebook admin ID
     *
     * @var string
     */
    private $admins;

    /**
     * OpenGraph object Facebook App ID
     *
     * @var string
     */
    private $appId;

    /**
     * OpenGraph object extended properties
     *
     * @var string[]
     */
    private $extendedProperties;

    /**
     * OpenGraph object image
     *
     * @var array
     */
    private $image = [];

    /**
     * OpenGraph object video
     *
     * @var array
     */
    private $video = [];

    /**
     * OpenGraph object audio
     *
     * @var array
     */
    private $audio = [];

    /**
     * Set OpenGraph object type.
     * 
     * Type of your object, e.g., "video.movie". Depending on the type you 
     * specify, other properties may also be required.
     *
     * @param string $type
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function setType(string $type)
    {
        if (!array_key_exists($type, self::NAMESPACES)) {
            throw new \InvalidArgumentException(sprintf('%s is not a valid OpenGraph object type', $type));
        }

        $this->type = $type;

        return $this;
    }

    /**
     * Set OpenGraph object title.
     * 
     * Title of your object as it should appear within the graph, e.g., "The Rock".
     *
     * @param string $title
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Set OpenGraph object site name.
     * 
     * If your object is part of a larger web site, the name which should be 
     * displayed for the overall site. e.g., "IMDb".
     *
     * @param string $siteName
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function setSiteName(string $siteName)
    {
        $this->siteName = $siteName;

        return $this;
    }

    /**
     * Set OpenGraph object description.
     * 
     * A one to two sentence description of your object.
     *
     * @param string $description
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Set OpenGraph object locale.
     * 
     * The locale these tags are marked up in. Of the format language_TERRITORY. Default is en_US.
     *
     * @param string $locale
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function setLocale(string $locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Set OpenGraph object alternate locale.
     * 
     * An array of other locales this page is available in.
     *
     * @param string $localeAlternate
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function setLocaleAlternate(string $localeAlternate)
    {
        $this->localeAlternate[] = $localeAlternate;

        return $this;
    }

    /**
     * Set OpenGraph object determiner.
     * 
     * The word that appears before this object's title in a sentence. 
     * An enum of (a, an, the, "", auto). If auto is chosen, the consumer of 
     * your data should chose between "a" or "an". Default is "" (blank).
     *
     * @param string $determiner
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function setDeterminer(string $determiner)
    {
        $this->determiner[] = $determiner;

        return $this;
    }

    /**
     * Set OpenGraph object canonical URL.
     * 
     * The canonical URL of your object that will be used as its permanent ID 
     * in the graph, e.g., "https://www.imdb.com/title/tt0117500/".
     *
     * @param string $url
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function setUrl(string $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Set OpenGraph object publish date.
     * 
     * When the article was first published.
     *
     * @param \DateTime $publishDate
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function setPublishDate(\DateTime $publishDate)
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    /**
     * Set OpenGraph object Facebook admin ID.
     * 
     * @param integer $admins
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function setAdmins(int $admins)
    {
        $this->admins = $admins;

        return $this;
    }

    /**
     * Set OpenGraph object Facebook App ID.
     * 
     * @param integer $appId
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function setAppId(int $appId)
    {
        $this->appId = $appId;

        return $this;
    }

    /**
     * Add image properties to OpenGraph object.
     *
     * Allows multiple image properties to add to a single OpenGraph object.
     * 
     * @param \TwoNobleStudio\OpenGraph\ContextType\Image $image
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addImage(\TwoNobleStudio\OpenGraph\ContextType\Image $image)
    {
        $this->image = array_merge($this->image, $image->getProperties());

        return $this;
    }

    /**
     * Add video properties to OpenGraph object.
     *
     * Allows multiple video properties to add to a single OpenGraph object.
     * 
     * @param \TwoNobleStudio\OpenGraph\ContextType\Video $video
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addVideo(\TwoNobleStudio\OpenGraph\ContextType\Video $video)
    {
        $this->video = array_merge($this->video, $video->getProperties());

        return $this;
    }

    /**
     * Add audio properties to OpenGraph object.
     *
     * Allows multiple audio properties to add to a single OpenGraph object.
     * 
     * @param \TwoNobleStudio\OpenGraph\ContextType\Audio $audio
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addAudio(\TwoNobleStudio\OpenGraph\ContextType\Audio $audio)
    {
        $this->audio = array_merge($this->audio, $audio->getProperties());

        return $this;
    }

    /**
     * Add product properties to OpenGraph object.
     *
     * @param \TwoNobleStudio\OpenGraph\ContextType\Product $product
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addProduct(\TwoNobleStudio\OpenGraph\ContextType\Product $product)
    {
        if ($this->type !== 'product') {
            throw new \InvalidArgumentException('Can\'t add product properties unless your change OpenGraph object type to "product"');
        }

        $this->extendedProperties = $product->getProperties();

        return $this;
    }

    /**
     * Add music song properties to OpenGraph object.
     *
     * @param \TwoNobleStudio\OpenGraph\ContextType\MusicSong $musicSong
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addMusicSong(\TwoNobleStudio\OpenGraph\ContextType\MusicSong $musicSong)
    {
        if ($this->type !== 'music.song') {
            throw new \InvalidArgumentException('Can\'t add music song properties unless your change OpenGraph object type to "music.song"');
        }

        $this->extendedProperties = $musicSong->getProperties();

        return $this;
    }

    /**
     * Add music album properties to OpenGraph object.
     *
     * @param \TwoNobleStudio\OpenGraph\ContextType\MusicAlbum $musicAlbum
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addMusicAlbum(\TwoNobleStudio\OpenGraph\ContextType\MusicAlbum $musicAlbum)
    {
        if ($this->type !== 'music.album') {
            throw new \InvalidArgumentException('Can\'t add music album properties unless your change OpenGraph object type to "music.album"');
        }

        $this->extendedProperties = $musicAlbum->getProperties();

        return $this;
    }

    /**
     * Add music playlist properties to OpenGraph object.
     *
     * @param \TwoNobleStudio\OpenGraph\ContextType\MusicPlaylist $musicPlaylist
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addMusicPlaylist(\TwoNobleStudio\OpenGraph\ContextType\MusicPlaylist $musicPlaylist)
    {
        if ($this->type !== 'music.playlist') {
            throw new \InvalidArgumentException('Can\'t add music playlist properties unless your change OpenGraph object type to "music.playlist"');
        }

        $this->extendedProperties = $musicPlaylist->getProperties();

        return $this;
    }

    /**
     * Add music radio station properties to OpenGraph object.
     *
     * @param \TwoNobleStudio\OpenGraph\ContextType\MusicRadioStation $radioStation
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addRadioStation(\TwoNobleStudio\OpenGraph\ContextType\MusicRadioStation $radioStation)
    {
        if ($this->type !== 'music.radio_station') {
            throw new \InvalidArgumentException('Can\'t add music radio_station properties unless your change OpenGraph object type to "music.radio_station"');
        }

        $this->extendedProperties = $radioStation->getProperties();

        return $this;
    }

    /**
     * Add video movie properties to OpenGraph object.
     *
     * @param \TwoNobleStudio\OpenGraph\ContextType\VideoMovie $videoMovie
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addVideoMovie(\TwoNobleStudio\OpenGraph\ContextType\VideoMovie $videoMovie)
    {
        if ($this->type !== 'video.movie') {
            throw new \InvalidArgumentException('Can\'t add video movie properties unless your change OpenGraph object type to "video.movie"');
        }

        $this->extendedProperties = $videoMovie->getProperties();

        return $this;
    }

    /**
     * Add video episode properties to OpenGraph object.
     *
     * @param \TwoNobleStudio\OpenGraph\ContextType\VideoEpisode $videoEpisode
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addVideoEpisode(\TwoNobleStudio\OpenGraph\ContextType\VideoEpisode $videoEpisode)
    {
        if ($this->type !== 'video.episode') {
            throw new \InvalidArgumentException('Can\'t add video episode properties unless your change OpenGraph object type to "video.episode"');
        }

        $this->extendedProperties = $videoEpisode->getProperties();

        return $this;
    }

    /**
     * Add video TV show properties to OpenGraph object.
     *
     * @param \TwoNobleStudio\OpenGraph\ContextType\VideoTVShow $videoTvShow
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addVideoTvShow(\TwoNobleStudio\OpenGraph\ContextType\VideoTVShow $videoTvShow)
    {
        if ($this->type !== 'video.tv_show') {
            throw new \InvalidArgumentException('Can\'t add video tv_show properties unless your change OpenGraph object type to "video.tv_show"');
        }

        $this->extendedProperties = $videoTvShow->getProperties();

        return $this;
    }

    /**
     * Add video other properties to OpenGraph object.
     *
     * @param \TwoNobleStudio\OpenGraph\ContextType\VideoOther $videoOther
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addVideoOther(\TwoNobleStudio\OpenGraph\ContextType\VideoOther $videoOther)
    {
        if ($this->type !== 'video.other') {
            throw new \InvalidArgumentException('Can\'t add video other properties unless your change OpenGraph object type to "video.other"');
        }

        $this->extendedProperties = $videoOther->getProperties();

        return $this;
    }

    /**
     * Add article properties to OpenGraph object.
     *
     * @param \TwoNobleStudio\OpenGraph\ContextType\Article $article
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addArticle(\TwoNobleStudio\OpenGraph\ContextType\Article $article)
    {
        if ($this->type !== 'article') {
            throw new \InvalidArgumentException('Can\'t add article properties unless your change OpenGraph object type to "article"');
        }

        $this->extendedProperties = $article->getProperties();

        return $this;
    }

    /**
     * Add book properties to OpenGraph object.
     *
     * @param \TwoNobleStudio\OpenGraph\ContextType\Book $book
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function addBook(\TwoNobleStudio\OpenGraph\ContextType\Book $book)
    {
        if ($this->type !== 'book') {
            throw new \InvalidArgumentException('Can\'t add book properties unless your change OpenGraph object type to "book"');
        }

        $this->extendedProperties = $book->getProperties();

        return $this;
    }

    /**
     * Add profile properties to OpenGraph object.
     *
     * @param \TwoNobleStudio\OpenGraph\ContextType\Profile $profile
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function setProfile(\TwoNobleStudio\OpenGraph\ContextType\Profile $profile)
    {
        if ($this->type !== 'profile') {
            throw new \InvalidArgumentException('Can\'t add profile properties unless your change OpenGraph object type to "profile"');
        }

        $this->extendedProperties = $profile->getProperties();

        return $this;
    }

    /**
     * Get OpenGraph object properties.
     *
     * @return array
     */
    public function getProperties(): array
    {
        $properties = [];

        if ($this->type) {
            $properties[] = ['property' => 'og:type', 'content' => $this->type];
        }

        if ($this->title) {
            $properties[] = ['property' => 'og:title', 'content' => $this->title];
        }

        if ($this->siteName) {
            $properties[] = ['property' => 'og:site_name', 'content' => $this->siteName];
        }

        if ($this->description) {
            $properties[] = ['property' => 'og:description', 'content' => $this->description];
        }

        if ($this->locale) {
            $properties[] = ['property' => 'og:locale', 'content' => $this->locale];
        }

        foreach ($this->localeAlternate as $localeAlternate) {
            $properties[] = ['property' => 'og:locale:alternate', 'content' => $localeAlternate];
        }

        if ($this->determiner) {
            $properties[] = ['property' => 'og:determiner', 'content' => implode(', ', $this->determiner)];
        }

        if ($this->url) {
            $properties[] = ['property' => 'og:url', 'content' => $this->url];
        }

        if ($this->publishDate instanceof \DateTime) {
            $properties[] = ['property' => 'og:publish_date', 'content' => $this->publishDate->format('Y-m-d\TH:i:s')];
        }

        if ($this->admins) {
            $properties[] = ['property' => 'fb:admins', 'content' => $this->admins];
        }

        if ($this->appId) {
            $properties[] = ['property' => 'fb:app_id', 'content' => $this->appId];
        }

        if ($this->extendedProperties) {
            $properties = array_merge($properties, $this->extendedProperties);
        }

        if ($this->image) {
            $properties = array_merge($properties, $this->image);
        }

        if ($this->video) {
            $properties = array_merge($properties, $this->video);
        }

        if ($this->audio) {
            $properties = array_merge($properties, $this->audio);
        }

        return $properties;
    }

    /**
     * Generate HTML meta tag from OpenGraph object properties
     *
     * @param array $properties OpenGraph object properties
     * @return \TwoNobleStudio\OpenGraph\OpenGraphContext
     */
    public function generateHtml(array $properties)
    {
        $result = [];

        foreach ($properties as $attributes) {
            $element = [];

            foreach ($attributes as $key => $value) {
                $element[] = $key . '="' . $value . '"';
            }

            if ($element) {
                $result[] = '<meta ' . implode(' ', $element) . '>';
            }
        }

        return implode(PHP_EOL, $result);
    }

    /**
     * Get OpenGraph object namespace
     *
     * @param array $properties OpenGraph object properties
     * @return string
     */
    public function getNamespace(array $properties): string
    {
        $result = [];

        $properties = array_column($properties, 'property');

        foreach ($properties as $property) {
            $prefix = (string) current(explode(':', $property));

            if (!in_array(self::NAMESPACES[$prefix], $result)) {
                $result[] = self::NAMESPACES[$prefix];
            }
        }

        if (isset(self::NAMESPACES[$this->type])) {
            $result[] = self::NAMESPACES[$this->type];
        }

        return implode(' ', $result);
    }
}
