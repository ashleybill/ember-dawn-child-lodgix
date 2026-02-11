# Ember Dawn Lodgix Integration

Custom template for integrating Lodgix vacation rental plugin with Ember Dawn theme.

## Prerequisites

- WordPress 6.0+
- Ember Dawn theme (installed but not necessarily activated)
- Lodgix Vacation Rental plugin

## Installation

### Option 1: Direct Theme Modification (Recommended for Single Site)

1. Install and activate **Ember Dawn** theme
2. Copy `ember-dawn-child/lodgix/` folder to `/wp-content/themes/ember-dawn/lodgix/`
3. Add custom CSS from below to **Appearance → Customize → Additional CSS**
4. Done! The `/vacation-rentals/` page will now use Ember Dawn's header/footer

### Option 2: Child Theme (For Multiple Sites or Theme Updates)

**Note:** This requires manual setup as Ember Dawn is itself a child theme.

1. Install **Bakery and Pastry** theme (Ember Dawn's parent)
2. Install **Ember Dawn** theme
3. Upload the `ember-dawn-child` folder to `/wp-content/themes/`
4. Activate the child theme
5. Add custom CSS from below to **Appearance → Customize → Additional CSS**

## Custom CSS

Add this to **Appearance → Customize → Additional CSS**:

```css
html {
    scroll-behavior: smooth; 
}

@media screen and (max-height: 600px) {
    .hide-on-small-display {
        display: none;
    }
}
```

## What This Does

- Provides a custom template for Lodgix's `/vacation-rentals/` archive page
- Integrates Ember Dawn's header and footer with Lodgix property listings
- Maintains mobile navigation functionality
- Preserves all Lodgix search, filter, and map features

## File Structure

```
ember-dawn-child/
├── lodgix/
│   └── archive-ldx-properties.php  # Custom Lodgix template
├── style.css                        # Theme metadata
├── functions.php                    # (Optional for child theme)
└── README.md
```

## Troubleshooting

**"ember-dawn is not a valid parent theme"**
- This is expected. Use Option 1 (direct modification) instead.

**Navigation menu not working on mobile**
- Clear browser cache (Cmd+Shift+R on Mac, Ctrl+Shift+R on Windows)
- Verify `wp_head()` and `wp_footer()` are in the template

**Styling looks wrong**
- Ensure Ember Dawn theme is activated
- Check that custom CSS is added to Additional CSS
- Clear all caches (browser, WordPress, CDN)

## Updates

When updating Ember Dawn:
1. Export your Additional CSS
2. Backup the `lodgix` folder
3. Update the theme
4. Re-add the `lodgix` folder and custom CSS
