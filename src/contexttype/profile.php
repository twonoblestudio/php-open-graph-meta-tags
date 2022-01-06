<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\ContextType;

/**
 * Profile OpenGraph object
 */
class Profile
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    private $firstName;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $lastName;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $username;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $gender;

    /**
     * Undocumented function
     *
     * @param string $firstName
     * @return \TwoNobleStudio\OpenGraph\ContextType\Profile
     */
    public function setFirstName(string $firstName): \TwoNobleStudio\OpenGraph\ContextType\Profile
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $lastName
     * @return \TwoNobleStudio\OpenGraph\ContextType\Profile
     */
    public function setLastName(string $lastName): \TwoNobleStudio\OpenGraph\ContextType\Profile
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $username
     * @return \TwoNobleStudio\OpenGraph\ContextType\Profile
     */
    public function setUsername(string $username): \TwoNobleStudio\OpenGraph\ContextType\Profile
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $gender
     * @return \TwoNobleStudio\OpenGraph\ContextType\Profile
     */
    public function setGender(string $gender): \TwoNobleStudio\OpenGraph\ContextType\Profile
    {
        if (!in_array($gender, ['male', 'female'])) {
            throw new \InvalidArgumentException(sprintf('%s invalid value for setGender', $gender));
        }

        $this->gender = $gender;

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

        if ($this->firstName) {
            $result[] = ['property' => 'profile:first_name', 'content' => $this->firstName];
        }

        if ($this->lastName) {
            $result[] = ['property' => 'profile:last_name', 'content' => $this->lastName];
        }

        if ($this->username) {
            $result[] = ['property' => 'profile:username', 'content' => $this->username];
        }

        if ($this->gender) {
            $result[] = ['property' => 'profile:gender', 'content' => $this->gender];
        }

        return $result;
    }
}
