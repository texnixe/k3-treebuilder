# Kirby 3 TreeBuilder

This plugin auto-generates a set of subpages defined in the parent blueprint. It re-creates the subpage builder functonality that was present in Kirby 2.

## Installation

### Download zip file

Copy the plugin folder into `site/plugins`

### Composer
Run `composer require texnixe/k3-treebuilder`.

## Usage

Define the set of subpages you want to generate in your blueprint like this:

```yaml
title: My parent page

subpageBuilder:
  - title: Gallery
    uid: gallery
    template: gallery
    num: 1
  - title: Info
    uid: info
    num: 2
    template: info

# lets show the auto-generated pages in a section
sections:
  subpages:
    headline: My auto-generated subpages
    type: pages
    templates:
      - gallery
      - info

```

Now every time you create a new page with this blueprint in the Panel, the subpages `gallery` and `info` will be created with the given properties.

The plugin works recursively, so if the auto-generated subpages contain a `subpageBuilder`definition as well, you can build a complete page tree.

Make sure the blueprints you define here with the `template` option exist, otherwise the subpages will be created but will not be properly displayed in the Panel. To make the subpages appear in the Panel, you probably want to set up a pages section for them as well like in the example above.


## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please create a new issue.

## License

[MIT]https://opensource.org/licenses/MIT


It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.
