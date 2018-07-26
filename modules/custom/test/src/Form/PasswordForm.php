<?php

namespace Drupal\test\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class PasswordForm.
 */
class PasswordForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'password_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['password'] = [
      '#type' => 'password',
      '#title' => $this->t('Password'),
      '#description' => $this->t('Enter your password'),
      '#maxlength' => 64,
      '#size' => 64,
      '#default_value' => admin,
      '#weight' => '0',
    ];
    $form['confirm_password'] = [
      '#type' => 'password_confirm',
      '#title' => $this->t('Confirm Password'),
      '#description' => $this->t('Enter your confirm password'),
      '#maxlength' => 64,
      '#size' => 64,
      '#default_value' => 123,
      '#weight' => '0',
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
      drupal_set_message($key . ': ' . $value);
    }

  }

}
