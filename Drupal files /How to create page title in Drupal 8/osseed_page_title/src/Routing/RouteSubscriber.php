<?php
/**
 * @file
 * Contains \Drupal\YOUR_CUSTOM_MODULE\Routing\RouteSubscriber.
 */

namespace Drupal\osseed_page_title\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class RouteSubscriber extends RouteSubscriberBase {
  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection) {
    if ($route = $collection->get('entity.contact_form.canonical')) {
      $route->setDefault('_title', 'Join-Us');
    }
  }
}
