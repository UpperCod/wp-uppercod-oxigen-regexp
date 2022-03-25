# UpperCodShortCodeData

This plugin allows access through shortcode to information of the shared concurrent object
for wordpress, by default $post.

## Syntax

```
[$ <property> [...filters] ]
```

1. `<property>`: Property to access of the current object.
2. `[...filters]`: Optional filters to apply to the data selected by `<property>`.

## Example

get page title

```txt
[$ title]
```

get page date

```txt
[$ date]
```

get page date and apply filter

```txt
[$ date date="Y"]
```

## Default filters

```php
[
     "date" => function ($option, $value) {
        return wp_date($option, is_numeric($value) ? $value : strtotime($value));
    },
    "json" => function ($option, $value) {
        return JSON_ENCODE($value);
    },
    "md5" => function ($option, $value) {
        return md5($value);
    },
    "striptags" => function ($option, $value) {
        return striptags($value);
    },
    "htmlencode" => function ($option, $value) {
        return htmlentities($value);
    },
    "urlencode" => function ($option, $value) {
        return urlencode($value);
    },
    "base64encode" => function ($option, $value) {
        return base64_encode($value);
    },
    "slug" => function ($option, $value) {
        return sanitize_title($value);
    },
    "numberformat" => function ($option, $value) {
        return number_format_i18n($value);
    },
    "filter" => function ($option, $value) {
        return apply_filter($option, $value);
    },
];
```

You can add more filters by accessing the global variable `$UpperCodShortcodeData`.
