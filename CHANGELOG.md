# Changelog

All notable changes to this project will be documented in this file.


## Unreleased

## v6.0.0
### Changed
- Graph API call upgrade to [v6.0](https://developers.facebook.com/docs/graph-api/changelog/version6.0)

## v5.0.5
### Added
- Server-side API added search_string to CustomData and fixed setLastName in UserData object.

## v5.0.3
### Added
- Added function `getHeaders` in RequestException class which provides header information
### Fixed
- Server Side API CustomData model normalization fix

## v5.0.2

### Added
  - Added `CrashRepoter`, more context available [here](https://developers.facebook.com/docs/business-sdk/guides/crash-reports)

## v5.0.1
### Added
  - Added strongly typed Server-Side API for Web (https://developers.facebook.com/docs/marketing-api/facebook-pixel/server-side-api/using-the-api)

## v5.0.0
### Changed
- Graph API call upgrade to [v5.0](https://developers.facebook.com/docs/graph-api/changelog/version5.0)

## v4.0.6

### Fixed
 - Add back `source` param in `Adaccount->createAdVideo`.

## v4.0.5

### Fixed
 - Introduce `addUsersMultiKey` and `removeUsersMultiKey` in `CustomAudience` to still allow add users to `CustomAudience` with multiple keys after `CustomAudienceMultiKey` been deprecated.

## v4.0.0
### Changed
- Graph API call upgrade to [v4.0](https://developers.facebook.com/docs/graph-api/changelog/version4.0)

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

