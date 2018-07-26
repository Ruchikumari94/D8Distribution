<?php

namespace Drupal\d8profile\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class TechxFeedbackForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'techx_feedback_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['first_name'] = [
      '#type' => 'textfield',
      '#title' => t('First Name'),
    ];

    $form['last_name'] = [
      '#type' => 'textfield',
      '#title' => t('Last Name'),
    ];

    $form['rate_session'] = [
      '#type' => 'radios',
      '#title' => t('Rate this Session?'),
      '#options' => [
        'good' => t('Good'),
        'average' => t('Average'),
        'bad' => t('Bad'),
      ],
    ];

    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
      '#button_type' => 'primary',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message('Thanks for your valuable Feedback');
  }
}
