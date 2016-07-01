# Previewer

*Version 0.1*

Change the `Open preview` url in the panel. This plugin is epecially useful for routed urls.

### Kirby built in support

Kirby already have built in support for some ways to change the preview in the [page settings](https://getkirby.com/docs/panel/blueprints/page-settings). The cases available are `parent`, `first-child` and `last-child`.

If you need one the cases above you don't need this plugin. If you need a little more control, see example below.

## Install

Add `previewer` folder into `site/plugins/`.

## Usage

### Blueprint

```
fields:
  previewer:
    type: previewer
    uri: 'some/route/{{slug}}'
```

Be aware of the quotes that may be needed to not break the blueprint.

### Type

`type` must be `previewer`.

### uri

Write your own `uri`.

**These can be replaced with values:**

- `{{slug}}` = `$page->slug()`
- `{{uri}}` = `$page->uri()`
- `{{id}}` => `$page->id()`

## Advanced logic

This plugin is made for simplicity. Therefor you can only change the `uri` in the blueprint, not by a snippet or a controller.

## License

MIT

## Requirements

Kirby 2.3

## Changelog

### 0.1

- Initial release