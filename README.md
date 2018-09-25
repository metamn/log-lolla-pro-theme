# log-lolla-pro-theme

The Log Lolla Pro Theme


## Gotchas

* include files:
 * `get_template_directory()` includes parent files
 * `get_stylesheet_directory()` includes child files
* include template parts
 * `get_template_part` looks both into the parent theme and child theme
 * parent theme parts can be reused or rewritten
