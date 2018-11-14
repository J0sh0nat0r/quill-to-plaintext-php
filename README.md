[![Latest Stable Version](https://poser.pugx.org/williamvenner/quill-to-plaintext/version.svg)](https://packagist.org/packages/williamvenner/quill-to-plaintext)

## quill-to-plaintext

[NodeJS/JavaScript Version](https://github.com/WilliamVenner/quill-to-plaintext-js)

Converts a Quill Delta to plaintext. It will ignore any non-insert operations.

You can either supply the JSON for a Quill Delta, or a Quill Delta object itself.

## Installation

Using composer:

```bash
$ composer require williamvenner/quill-to-plaintext
```

## How to use

```php
use WilliamVenner\QuillToPlaintext;

QuillToPlaintext::Convert('{"ops":[{"insert":"Fixed problem with core files."}]}');
// => Fixed problem with core files.

$quill_delta = json_decode('{"ops":[{"insert":"Fixed problem with core files."}]}'); // this is emulating creating an actual Quill Delta object
QuillToPlaintext::Convert($quill_delta);
// => Fixed problem with core files.
```
