<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


class HomepagePresenter extends Nette\Application\UI\Presenter
{
    /**
     * @var Nette\Database\Context
     * @inject
     */
    public $database;

    public function renderDefault()
    {
        $this->template->databaseVersion = $this->database->query('SELECT VERSION()')->fetchField();
    }
}
