# Changelog

All notable changes to this project will be documented in this file.


## Unreleased

## v3.3.1
### Changed
- Remove list of API call from Business SDK, any [these APIs](https://developers.facebook.com/docs/graph-api/changelog/4-30-2019-endpoint-deprecations) included in Business SDK will be deprecated.   

## v3.3.0
### Changed
- Graph API call upgrade to [v3.3](https://developers.facebook.com/docs/graph-api/changelog/version3.3)
### Deprecated
- Deprecated `parentID` in `AbstractCrudObject`.
- Deprecated `CustomAudienceMultiKey`, use class `CustomAudience` instead.
- Deprecated functions `create`, `read`, `update` in `AbstractCrudObject`. Check out our [recommended way](https://github.com/facebook/facebook-php-business-sdk#object-classes) to make API call.
***`read` will reset the object fields, while `getSelf` will get a new object.*** For example : 
  ```
  $async_job = $adaccount->getInsightsAsync($fields, $params);

  $async_job = $async_job->getSelf();

  while (!$async_job->isComplete()) {
    sleep(1);
    $async_job = $async_job->getSelf();
  }
  ```


