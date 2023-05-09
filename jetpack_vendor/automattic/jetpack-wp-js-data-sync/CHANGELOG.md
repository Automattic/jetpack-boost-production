# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [0.2.0-alpha] - unreleased

This is an alpha version! The changes listed here are not final.

### Added
- Added action hooks to fire during store value update
- Add Jetpack Autoloader package suggestion.

### Changed
- Added lazy entry loading
- Changed the Data Sync Entry terminology and updated inline documentation
- Ensure most up-to-date package version is in use.
- No longer auto-loading DataSync Options

### Fixed
- Fixed errors on GET requests
- Jetpack Boost: Fix PHP 8.2 Warnings

## 0.1.0 - 2023-04-06
### Added
- Added Schema class to help parsing data. [#29564]
- First release. [#28787]
- More flexible storage driver, built in boolean data handler.[#29122]

### Changed
- Refactored WP JS Data Sync to a more flexible approach and use schemas for ensuring the data is the correct shape. [#29899]

### Fixed
- Jetpack Boost: Fix assoc_array schema validation. [#29611]

[0.2.0-alpha]: https://github.com/Automattic/jetpack-wp-js-data-sync/compare/v0.1.0...v0.2.0-alpha
