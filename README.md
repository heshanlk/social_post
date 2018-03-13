# Social Post for Drupal 7

Social Post provides a common interface for creating modules related to autoposting to social network services. The module ships with Social Post Facebook and Social Post Twitter.

# Install

Social Post rely on Facebook Graphs API and Twitter oAuth API.

## Download Dependencies
```
cd sites/all/modules/social_post
composer install
```

## Manually Download Depandencies
```
cd sites/all/modules/social_post
composer require facebook/graph-sdk
composer require abraham/twitteroauth
```

## For Developers

It is really esay to add new services, see `social_post.api.php` for details.

```
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
```
