<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 */
class Book
{
    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $subTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $author;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true, name="condition_info")
     */
    private $condition;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", length=4, nullable=true)
     */
    private $volume;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", length=4, nullable=true)
     */
    private $volumeNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $isbn;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", length=4, nullable=true)
     */
    private $publicationYear;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $publishingHouse;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $collection;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", length=6, nullable=true)
     */
    private $numberOfPages;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $format;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $location;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $secondLocation;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $thirdLocation;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $theme;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $firstKeyWord;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $secondKeyWord;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $thirdKeyWord;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $fourthKeyWord;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $fifthKeyWord;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $sixthKeyWord;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $seventhKeyWord;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $eighthKeyWord;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", length=4, nullable=true)
     */
    private $buyingYear;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", length=10, nullable=true)
     */
    private $buyingPrice;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $buyingPlace;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $originalLanguage;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $originalCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $originalTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $translator;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", length=4, nullable=true)
     */
    private $firstPublicationYear;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $firstPublishingHouse;

    /**
     * @var string
     *
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $rate;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $firstPersonalizedField;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $secondPersonalizedField;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $thirdPersonalizedField;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $fourthPersonalizedField;

    /**
     * @var string|null
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $comment;

    /**
     * @var Database
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Database")
     * @ORM\JoinColumn(nullable=false)
     */
    private $database;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getSubTitle(): ?string
    {
        return $this->subTitle;
    }

    /**
     * @param string $subTitle
     */
    public function setSubTitle(string $subTitle)
    {
        $this->subTitle = $subTitle;
    }

    /**
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return string|null
     */
    public function getCondition(): ?string
    {
        return $this->condition;
    }

    /**
     * @param string $condition
     */
    public function setCondition(string $condition)
    {
        $this->condition = $condition;
    }

    /**
     * @return int|null
     */
    public function getVolume(): ?int
    {
        return $this->volume;
    }

    /**
     * @param int $volume
     */
    public function setVolume(int $volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return int|null
     */
    public function getVolumeNumber(): ?int
    {
        return $this->volumeNumber;
    }

    /**
     * @param int $volumeNumber
     */
    public function setVolumeNumber(int $volumeNumber)
    {
        $this->volumeNumber = $volumeNumber;
    }

    /**
     * @return int|null
     */
    public function getPublicationYear(): ?int
    {
        return $this->publicationYear;
    }

    /**
     * @param int $publicationYear
     */
    public function setPublicationYear(int $publicationYear)
    {
        $this->publicationYear = $publicationYear;
    }

    /**
     * @return string|null
     */
    public function getPublishingHouse(): ?string
    {
        return $this->publishingHouse;
    }

    /**
     * @param string $publishingHouse
     */
    public function setPublishingHouse(string $publishingHouse)
    {
        $this->publishingHouse = $publishingHouse;
    }

    /**
     * @return string|null
     */
    public function getCollection(): ?string
    {
        return $this->collection;
    }

    /**
     * @param string $collection
     */
    public function setCollection(string $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return int|null
     */
    public function getNumberOfPages(): ?int
    {
        return $this->numberOfPages;
    }

    /**
     * @param int $numberOfPages
     */
    public function setNumberOfPages(int $numberOfPages)
    {
        $this->numberOfPages = $numberOfPages;
    }

    /**
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat(string $format)
    {
        $this->format = $format;
    }

    /**
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location)
    {
        $this->location = $location;
    }

    /**
     * @return null|string
     */
    public function getSecondLocation(): ?string
    {
        return $this->secondLocation;
    }

    /**
     * @param null|string $secondLocation
     */
    public function setSecondLocation(string $secondLocation)
    {
        $this->secondLocation = $secondLocation;
    }

    /**
     * @return null|string
     */
    public function getThirdLocation(): ?string
    {
        return $this->thirdLocation;
    }

    /**
     * @param null|string $thirdLocation
     */
    public function setThirdLocation(string $thirdLocation)
    {
        $this->thirdLocation = $thirdLocation;
    }

    /**
     * @return string|null
     */
    public function getTheme(): ?string
    {
        return $this->theme;
    }

    /**
     * @param string $theme
     */
    public function setTheme(string $theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getFirstKeyWord(): ?string
    {
        return $this->firstKeyWord;
    }

    /**
     * @param string $firstKeyWord
     */
    public function setFirstKeyWord(string $firstKeyWord)
    {
        $this->firstKeyWord = $firstKeyWord;
    }

    /**
     * @return string|null
     */
    public function getSecondKeyWord(): ?string
    {
        return $this->secondKeyWord;
    }

    /**
     * @param string $secondKeyWord
     */
    public function setSecondKeyWord(string $secondKeyWord)
    {
        $this->secondKeyWord = $secondKeyWord;
    }

    /**
     * @return string|null
     */
    public function getThirdKeyWord(): ?string
    {
        return $this->thirdKeyWord;
    }

    /**
     * @param string $thirdKeyWord
     */
    public function setThirdKeyWord(string $thirdKeyWord)
    {
        $this->thirdKeyWord = $thirdKeyWord;
    }

    /**
     * @return string|null
     */
    public function getFourthKeyWord(): ?string
    {
        return $this->fourthKeyWord;
    }

    /**
     * @param string $fourthKeyWord
     */
    public function setFourthKeyWord(string $fourthKeyWord)
    {
        $this->fourthKeyWord = $fourthKeyWord;
    }

    /**
     * @return string|null
     */
    public function getFifthKeyWord(): ?string
    {
        return $this->fifthKeyWord;
    }

    /**
     * @param string $fifthKeyWord
     */
    public function setFifthKeyWord(string $fifthKeyWord)
    {
        $this->fifthKeyWord = $fifthKeyWord;
    }

    /**
     * @return string|null
     */
    public function getSixthKeyWord(): ?string
    {
        return $this->sixthKeyWord;
    }

    /**
     * @param string $sixthKeyWord
     */
    public function setSixthKeyWord(string $sixthKeyWord)
    {
        $this->sixthKeyWord = $sixthKeyWord;
    }

    /**
     * @return string|null
     */
    public function getSeventhKeyWord(): ?string
    {
        return $this->seventhKeyWord;
    }

    /**
     * @param string $seventhKeyWord
     */
    public function setSeventhKeyWord(string $seventhKeyWord)
    {
        $this->seventhKeyWord = $seventhKeyWord;
    }

    /**
     * @return string|null
     */
    public function getEighthKeyWord(): ?string
    {
        return $this->eighthKeyWord;
    }

    /**
     * @param string $eighthKeyWord
     */
    public function setEighthKeyWord(string $eighthKeyWord)
    {
        $this->eighthKeyWord = $eighthKeyWord;
    }

    /**
     * @return int|null
     */
    public function getBuyingYear(): ?int
    {
        return $this->buyingYear;
    }

    /**
     * @param int $buyingYear
     */
    public function setBuyingYear(int $buyingYear)
    {
        $this->buyingYear = $buyingYear;
    }

    /**
     * @return int|null
     */
    public function getBuyingPrice(): ?int
    {
        return $this->buyingPrice;
    }

    /**
     * @param int $buyingPrice
     */
    public function setBuyingPrice(int $buyingPrice)
    {
        $this->buyingPrice = $buyingPrice;
    }

    /**
     * @return string|null
     */
    public function getBuyingPlace(): ?string
    {
        return $this->buyingPlace;
    }

    /**
     * @param string $buyingPlace
     */
    public function setBuyingPlace(string $buyingPlace)
    {
        $this->buyingPlace = $buyingPlace;
    }

    /**
     * @return null|string
     */
    public function getOriginalLanguage(): ?string
    {
        return $this->originalLanguage;
    }

    /**
     * @param string $originalLanguage
     */
    public function setOriginalLanguage(string $originalLanguage)
    {
        $this->originalLanguage = $originalLanguage;
    }

    /**
     * @return null|string
     */
    public function getOriginalCountry(): ?string
    {
        return $this->originalCountry;
    }

    /**
     * @param string $originalCountry
     */
    public function setOriginalCountry(string $originalCountry)
    {
        $this->originalCountry = $originalCountry;
    }

    /**
     * @return null|string
     */
    public function getOriginalTitle(): ?string
    {
        return $this->originalTitle;
    }

    /**
     * @param string $originalTitle
     */
    public function setOriginalTitle(string $originalTitle)
    {
        $this->originalTitle = $originalTitle;
    }

    /**
     * @return null|string
     */
    public function getTranslator(): ?string
    {
        return $this->translator;
    }

    /**
     * @param string $translator
     */
    public function setTranslator(string $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @return int|null
     */
    public function getFirstPublicationYear(): ?int
    {
        return $this->firstPublicationYear;
    }

    /**
     * @param int $firstPublicationYear
     */
    public function setFirstPublicationYear(int $firstPublicationYear)
    {
        $this->firstPublicationYear = $firstPublicationYear;
    }

    /**
     * @return null|string
     */
    public function getFirstPublishingHouse(): ?string
    {
        return $this->firstPublishingHouse;
    }

    /**
     * @param string $firstPublishingHouse
     */
    public function setFirstPublishingHouse(string $firstPublishingHouse)
    {
        $this->firstPublishingHouse = $firstPublishingHouse;
    }

    /**
     * @return string|null
     */
    public function getRate(): ?string
    {
        return $this->rate;
    }

    /**
     * @param string $rate
     */
    public function setRate(string $rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return string
     */
    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     */
    public function setIsbn(string $isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * @return string|null
     */
    public function getFirstPersonalizedField(): ?string
    {
        return $this->firstPersonalizedField;
    }

    /**
     * @param string $firstPersonalizedField
     */
    public function setFirstPersonalizedField(string $firstPersonalizedField)
    {
        $this->firstPersonalizedField = $firstPersonalizedField;
    }

    /**
     * @return string|null
     */
    public function getSecondPersonalizedField(): ?string
    {
        return $this->secondPersonalizedField;
    }

    /**
     * @param string $secondPersonalizedField
     */
    public function setSecondPersonalizedField(string $secondPersonalizedField)
    {
        $this->secondPersonalizedField = $secondPersonalizedField;
    }

    /**
     * @return string|null
     */
    public function getThirdPersonalizedField(): ?string
    {
        return $this->thirdPersonalizedField;
    }

    /**
     * @param string $thirdPersonalizedField
     */
    public function setThirdPersonalizedField(string $thirdPersonalizedField)
    {
        $this->thirdPersonalizedField = $thirdPersonalizedField;
    }

    /**
     * @return string|null
     */
    public function getFourthPersonalizedField(): ?string
    {
        return $this->fourthPersonalizedField;
    }

    /**
     * @param string $fourthPersonalizedField
     */
    public function setFourthPersonalizedField(string $fourthPersonalizedField)
    {
        $this->fourthPersonalizedField = $fourthPersonalizedField;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return Database|null
     */
    public function getDatabase(): ?Database
    {
        return $this->database;
    }

    /**
     * @param Database $database
     */
    public function setDatabase(Database $database)
    {
        $this->database = $database;
    }
}
