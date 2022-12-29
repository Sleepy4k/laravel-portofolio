<?php

namespace App\Services;

use App\Contracts\Models;

class Service
{
    /**
     * @var userInterface
     */
    protected $userInterface;

    /**
     * @var aboutInterface
     */
    protected $aboutInterface;

    /**
     * @var contactInterface
     */
    protected $contactInterface;

    /**
     * @var projectInterface
     */
    protected $projectInterface;

    /**
     * @var languageInterface
     */
    protected $languageInterface;

    /**
     * @var applicationInterface
     */
    protected $applicationInterface;

    /**
     * Model contract constructor.
     * 
     * @param  \App\Contracts\Models\UserInterface  $userInterface
     * @param  \App\Contracts\Models\AboutInterface  $aboutInterface
     * @param  \App\Contracts\Models\ContactInterface  $contactInterface
     * @param  \App\Contracts\Models\ProjectInterface  $projectInterface
     * @param  \App\Contracts\Models\LanguageInterface  $languageInterface
     * @param  \App\Contracts\Models\ApplicationInterface  $applicationInterface
     */
    public function __construct(
        Models\UserInterface $userInterface,
        Models\AboutInterface $aboutInterface,
        Models\ContactInterface $contactInterface,
        Models\ProjectInterface $projectInterface,
        Models\LanguageInterface $languageInterface,
        Models\ApplicationInterface $applicationInterface
    ) {
        $this->userInterface = $userInterface;
        $this->aboutInterface = $aboutInterface;
        $this->contactInterface = $contactInterface;
        $this->projectInterface = $projectInterface;
        $this->languageInterface = $languageInterface;
        $this->applicationInterface = $applicationInterface;
    }
}
