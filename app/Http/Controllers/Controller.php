<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CharacterRepositoryInterface;

abstract class Controller
{
    protected $characterRepository;
    public function __construct(
        CharacterRepositoryInterface $characterRepository
    ) {
        $this->characterRepository = $characterRepository;
    }
}
