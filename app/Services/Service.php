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
     * @param  \App\Contracts\Models\LanguageInterface  $languageInterface
     * @param  \App\Contracts\Models\ApplicationInterface  $applicationInterface
     */
    public function __construct(
        Models\UserInterface $userInterface,
        Models\LanguageInterface $languageInterface,
        Models\ApplicationInterface $applicationInterface
    ) {
        $this->userInterface = $userInterface;
        $this->languageInterface = $languageInterface;
        $this->applicationInterface = $applicationInterface;
    }
}
