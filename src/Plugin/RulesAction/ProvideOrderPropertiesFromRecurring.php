<?php

namespace Drupal\commerce_recurring\Plugin\RulesAction;

use Drupal\commerce_recurring\Controller\RecurringController;
use Drupal\commerce_recurring\Entity\RecurringInterface;
use Drupal\rules\Core\RulesActionBase;

/**
 * Provides a 'Provide properties to generate the order from the recurring entity' action.
 *
 * @todo Add commerce profiles to the rule action provides?? Must we use a Deriver?
 *
 * @RulesAction(
 *   id = "commerce_recurring_provide_order_properties_from_recurring",
 *   label = @Translation("Provide properties to generate the order from the recurring entity"),
 *   category = @Translation("Commerce Recurring"),
 *   context = {
 *     "commerce_recurring" = @ContextDefinition("commerce_recurring",
 *       label = @Translation("Commerce Recurring"),
 *       description = @Translation("Specifies the recurring entity, which should be used for provide the order properties.")
 *     )
 *   },
 *   provides = {
 *     "commerce_order" = @ContextDefinition(
 *       "commerce_order",
 *       label = @Translation("Commerce Order")
 *     )
 *   }
 * )
 */
class ProvideOrderPropertiesFromRecurring extends RulesActionBase {

  /**
   * The main commerce recurring controller.
   *
   * @var \Drupal\commerce_recurring\Controller\RecurringController
   */
  protected $recurringController;

  /**
   * {@inheritdoc}
   */
  public function __construct(RecurringController $recurring_controller, array $configuration, $plugin_id, $plugin_definition) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);

    $this->recurringController = $recurring_controller;
  }

  /**
   * Generate the order associated to the order recurring entity.
   *
   * @param \Drupal\commerce_recurring\Entity\RecurringInterface $commerce_recurring
   *   The commerce recurring entity.
   */
  protected function doExecute(RecurringInterface $commerce_recurring) {
    // @todo Finish this action.
  }

}
