This plugin allows to mark media manager files with a label, and using a twig filter, retrieve those media manager files url

# Feature

- Add a label to media file manager files and refer to them in template by a twig filter

# Usage

- Select Enhanced Media plugin from the top bar
- Write a label and then select a file
- Open the CMS section and choose a file or partials
- Use the previously defined label with the twig filter `enhanced_media`

````
<img src="{{ 'hero-image'|enhanced_media }}">
````
