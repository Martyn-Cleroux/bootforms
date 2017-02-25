<?php

use AdamWathan\BootForms\Elements\FormControlFeedback;

class HelpBlockTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function testCanRenderBasicHelpBlock()
    {
        $helpBlock = new FormControlFeedback('Email is required.');

        $expected = '<p class="help-block">Email is required.</p>';
        $result = $helpBlock->render();
        $this->assertEquals($expected, $result);

        $helpBlock = new FormControlFeedback('First name is required.');

        $expected = '<p class="help-block">First name is required.</p>';
        $result = $helpBlock->render();
        $this->assertEquals($expected, $result);
    }
}
