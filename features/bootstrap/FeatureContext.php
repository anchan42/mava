<?php
//...


use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;

class FeatureContext extends MinkContext implements SnippetAcceptingContext
{
  //...

    /**
     * @When I press more
     */
    public function iPressMore()
    {
       $this->getSession()         // the browser
      ->getPage()            // the DocumentElement
      ->findButton("more")   // the NodeElement 
      ->press();             // what you want to do with it
    }
}
