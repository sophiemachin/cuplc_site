---
title: "Site Credits"
layout: splash
permalink: /site-credits/
---

## Site Design
* This website was designed by Bilal Chughtai in 2022
* Thanks to Jane Amblery for graphic design
* Many competition images by [White Lights Media](https://whitelightsmedia.com/)

## Authors
The following people have contributed content in the form of blog posts to the website:
<ul>
  {% for author in site.data.authors %}
    <li>{{ author[1].name }}</li>
  {% endfor %}
</ul>

## Technologies
This website is build using a bunch of tools, including
- [Jekyll](http://jekyllrb.com/)
- [jQuery](http://jquery.com/)
- [Susy](http://susy.oddbird.net/)
- [Breakpoint](http://breakpoint-sass.com/)
- [Magnific Popup](http://dimsemenov.com/plugins/magnific-popup/)
- [FitVids.JS](http://fitvidsjs.com/)
- [Greedy Navigation](http://codepen.io/lukejacksonn/pen/PwmwWV)
- [jQuery Smooth Scroll](https://github.com/kswedberg/jquery-smooth-scroll)
- [Stickyfill](https://github.com/wilddeer/stickyfill)
- [The Noun Project](https://thenounproject.com)
- [Font Awesome](http://fortawesome.github.io/Font-Awesome/)
