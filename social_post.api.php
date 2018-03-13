<?php

/**
 * @file
 */

function hook_social_post_accounts(){
  return array(
    'twitter' => array(
      'name' => 'Twitter',
      'settings' => array(
        'consumer_key' => array(
          '#type' => 'textfield',
          '#title' => t('Consumer Key')
        ),
        'consumer_secret' => array(
          '#type' => 'textfield',
          '#title' => t('Consumer Secret')
        )
      ),
      'authentication' => '_social_post_twitter_social_post_authentication_callback',
      'post_authentication' => '_social_post_twitter_social_post_post_authentication_callback',
      'publish' => '_social_post_twitter_social_post_publish_callback',
      'accounts' => '_social_post_twitter_social_post_get_accounts_callback'
    );
  );
}
