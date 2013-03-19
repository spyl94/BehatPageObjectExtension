<?php

namespace SensioLabs\PageObjectExtension\Context;

use Behat\Behat\Context\BehatContext;
use SensioLabs\PageObjectExtension\Context\PageFactory;
use SensioLabs\PageObjectExtension\PageObject\Page;

class PageObjectContext extends BehatContext implements PageObjectAwareInterface
{
    /**
     * @var PageFactory $pageFactory
     */
    private $pageFactory = null;

    /**
     * @param string $page
     *
     * @return Page|Element
     */
    public function getPage($page)
    {
        return $this->pageFactory->create($page);
    }

    /**
     * @param PageFactory $pageFactory
     */
    public function setPageFactory(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }
}
