# Changelog

All notable changes to this project will be documented in this file.


## Unreleased

## v3.3.0
### Changed
- Graph API call upgrade to [v3.3](https://developers.facebook.com/docs/graph-api/changelog/version3.3)
### Deprecated
- `parentID` in `AbstractCrudObject`.
- Function `create`, `read`, `update` for `AbstractCrudObject`. Check out our [recommended way](https://github.com/facebook/facebook-php-business-sdk#object-classes) to make API call.
- Deprecated `CustomAudienceMultiKey`, use class `CustomAudience` instead.
