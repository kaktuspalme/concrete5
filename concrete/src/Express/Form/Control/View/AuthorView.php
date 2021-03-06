<?php
namespace Concrete\Core\Express\Form\Control\View;

use Concrete\Core\Entity\Express\Control\TextControl;
use Concrete\Core\Entity\Express\Form;
use Concrete\Core\Filesystem\TemplateLocator;
use Concrete\Core\Form\Context\ContextInterface;

class AuthorView extends View
{

    public function getControlID()
    {
        return null;
    }

    public function createTemplateLocator()
    {
        $locator = new TemplateLocator('author');
        return $locator;
    }


}
