<?php

namespace Drupal\use_ajax_example\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Component\Render\FormattableMarkup;
use Drupal\Core\Url;

/**
 * Returns responses for use_ajax_example routes.
 */
class UseAjaxExampleController extends ControllerBase {

  /**
   * Builds the page with the content we want to show in the dialog.
   */
  public function buildContentPage() {

    //throw new \Exception('The user will have no idea this happened');

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

  /**
   * Builds the page with the link.
   */
  public function buildLinkPage() {
    $dialogOptions = [
      'width' => '50%',
    ];

    $contents = new FormattableMarkup('<a href="@url" class="use-ajax" data-dialog-type="modal" data-dialog-options="@dialog_options">click me</a>', [
        '@url' => Url::fromRoute('use_ajax_example.content_page')->toString(),
        '@dialog_options' => json_encode($dialogOptions),
    ]);

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $contents,
    ];

    return $build;
  }

}
