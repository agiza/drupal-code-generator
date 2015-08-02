<?php

namespace DrupalCodeGenerator\Tests\Other;

use DrupalCodeGenerator\Tests\GeneratorTestCase;

class HtmlPageTest extends GeneratorTestCase {

  /**
   * {@inheritdoc}
   */
  public function setUp () {
    $this->class = 'Other\HtmlPage';
    $this->answers = [
      'example.html',
    ];
    $this->target = 'example.html';
    $this->fixture = __DIR__ . '/_' . $this->target;
    parent::setUp();
  }

}
