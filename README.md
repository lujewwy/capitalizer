# Words capitalizer

The library capitalizes all the words in the provided string except the words that are already fully in upper case.

## Requirements

- PHP 7.0

## Installation

```bash
$ composer require lujewwy/capitalizer
```

## Basic usage

```php
Capitalizer::capitalize('hello, world!'); // Hello, World!
Capitalizer::capitalize('ABC123'); // ABC123
Capitalizer::capitalize('rfc12'); // Rfc12
```
