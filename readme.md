# Just a Handful View for Store Locator Plus

## Description

Just a Handful View (JaHV) is an extension for [Store Locator Plus](http://www.charlestonsw.com/product/store-locator-plus/). This extension makes it very easy and convenient for users to create a store locator page that is optimized for websites that have a handful of stores. This extension features:

* No search options, everything will appear on one screen
* A consolidated view displaying the results panel right next to the map
* A consolidated results list only showing the location details once a user clicks on it
* Font Awesome icons. This extension uses [Font Awesome 2.0 icons](http://fortawesome.github.com/Font-Awesome/) so if you are already have the [Font Awesome WordPress plugin](http://wordpress.org/extend/plugins/font-awesome/) then there wont be any additional overhead.

## FAQ

**I don't like that the map is right next to the results list. Can I change it back?**

Yes, you can override the default styles in your theme's style sheet.

**I don't like the consolidated results list. Can you give me all the details by default?**

For right now you can override the CSS in your theme's style sheet. I plan on adding that functionality in administrative section soon.

**What is the arrow icon in the results list?**

The arrow icon itself is actually a character from Font Awesome. This means that you can use CSS to style it with colors, drop shadows, hover effets, etc. The transition effect is created with the proprietary css 3 properties `transform` and `transition`. If you have a newer browser (ex. Chrome, Firefox, Safari, IE9)
you should see the arrow flip upsidedown using CSS. If you don't have a fancy browser the arrow will probably just stay there. 

If you would rather not have an icon at all you can hide it using the `____` selector. A possible feature in the future is to use Modernizer to detect if the browser can transform & transition. If it can show the fancy animation and if not then just swap out the icon for an upside down icon.

## Copyright

Copyright (C) 2012 Patrick Rauland. All rights reserved.