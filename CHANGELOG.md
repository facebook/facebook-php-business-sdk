# Changelog

All notable changes to this project will be documented in this file.


## Unreleased

## v10.0.0


### Changed
- Graph API call upgrade to [v10.0](https://developers.facebook.com/docs/graph-api/changelog/version10.0)

## v9.0.2


### Added
- `action_source` field to Event for Conversions API.

### Fixed
- `opt_out` field was being removed when set to false for Conversions API.

## v9.0.0
### Changed
- Graph API call upgrade to [v9.0](https://developers.facebook.com/docs/graph-api/changelog/version9.0)

### Added
- `delivery_category` field to Content for Conversions API.

### Changed
- Add empty to the list of reserved keywords.
- Change empty value enum name in AdsPixelFirstPartyCookieStatusValues and AdsPixelDataUseSettingValues

## v8.0.3

### Changed
- Fixed a normalization issue for zero values in CustomData in Conversions API
- Start passing in the appsecret_proof to Conversions API custom http_clients when an appsecret is set
- A Conversions API EventRequest custom http_client must now be an object instead of a class name

## v8.0.2

### Added
- Added batching support to Conversions API. Create batched event requests by using BatchProcessor.

### Added
- `lead_id` field to the Conversions API `user_data` section.
- Added HttpServiceInterface to enable the default request object to be overridden by a user-defined HTTP Request Service class. Can be used to create Conversions API event requests.

## v8.0.1

### Added
- Added async support to Conversions API - Create event request promises by using EventRequestAsync.

## v8.0.0

### Changed
- Graph API call upgrade to [v8.0](https://developers.facebook.com/docs/graph-api/changelog/version8.0)

### Added
- `delivery_category` field in custom_data section for Conversions API(formerly Serverside API).

## v7.0.2
### Added
- Added support for data processing options in Serverside API. For more details see : https://developers.facebook.com/docs/marketing-apis/data-processing-options

## v7.0.0
### Changed
- Graph API call upgrade to [v7.0](https://developers.facebook.com/docs/graph-api/changelog/version7.0)

## v6.0.2
### Added
- Add support for custom properties in the Server-Side API

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

