<?php

namespace Drupal\Tests\paragraphs_types\Functional;

use Drupal\FunctionalJavascriptTests\JavascriptTestBase;

class ParagraphsTypesInstallUninstallTest extends JavascriptTestBase {

  public static $modules = array('paragraphs_types');

  public function setUp() {
    parent::setUp();

    $admin_user = $this->drupalCreateUser(array(
      'administer paragraphs types',
      'administer modules',
    ));
    $this->drupalLogin($admin_user);
  }

  public function testUninstall() {

    $session = $this->getSession();

    // Uninstall the module.
    $this->drupalGet('admin/modules/uninstall');
    $this->submitForm(['uninstall[paragraphs_types]' => TRUE], t('Uninstall'));
    $this->submitForm([], t('Uninstall'));
    $html = $session->getPage()->getHtml();
    $this->assertContains('The selected modules have been uninstalled.', $html);
    $this->assertContains('Paragraphs', $html);
    $this->assertNotContains('Paragraphs Types', $html);
  }

  /**
   * Waits for jQuery to become active and animations to complete.
   */
  protected function waitForAjaxToFinish() {
    $condition = "(0 === jQuery.active && 0 === jQuery(':animated').length)";
    $this->assertJsCondition($condition, 10000);
  }
}