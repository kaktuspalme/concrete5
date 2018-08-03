<?php

namespace Concrete\Core\Page\Command;

use League\Tactician\Bernard\QueueableCommand;

class DeletePageCommand extends PageCommand
{

    protected $userID;

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param mixed $userID
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    public function __construct($pageID, $userID)
    {
        $this->userID = $userID;
        parent::__construct($pageID);
    }


}