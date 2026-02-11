# Ember Dawn Child Theme

Child theme for Ember Dawn with Lodgix vacation rental integration.

## Installation

1. Install parent theme: Ember Dawn
2. Upload and activate this child theme
3. Lodgix template override will automatically work

## Packaging for Upload

To create a zip file for uploading to another WordPress site:

```bash
zip -r ember-dawn-child.zip ember-dawn-child
```

Or from within the theme directory:

```bash
cd ember-dawn-child
zip -r ../ember-dawn-child.zip .
```

Then upload via WordPress Admin → Appearance → Themes → Add New → Upload Theme

## Customizations

- `lodgix/archive-ldx-properties.php` - Custom template for vacation rental listings with theme header/footer
