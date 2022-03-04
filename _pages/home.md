---
title: "Welcome to CUPLC"
excerpt: "d"
layout: splash
permalink: /
date: 2022-02-28
header:
  overlay_color: "#000"
  overlay_filter: "0.5"
  overlay_image: /assets/images/home_cover.jpg
  caption: "Varsity 2020"


club_description:
  - image_path: /assets/images/logos/arty_lion.png #TODO make this smaller
    alt: "CUPLC Lion"
    title: "Welcome"
    excerpt: "A sporting community of diverse experience and abilities brought together by a love of strength and self improvement. We practice the art of the squat, bench and deadlift."
    url: "/the-club/"
    btn_label: "Read More"
    btn_class: "btn--primary"

logo_gallery:
  - image_path: /assets/images/logos/cam.png
  - image_path: /assets/images/logos/cam_sport.png
  - image_path: /assets/images/logos/british_powerlifting.png
  - image_path: /assets/images/logos/ipf.png



---
{% include feature_row id="club_description" type="left" %}

{% include gallery id="logo_gallery" layout="fourth" %}

# Recent Posts [View More](/blog/){: .btn .btn--primary .btn--small .align-right}

<div class="entries-grid">
  {% for post in site.posts limit:4 %}
    {% include archive-single.html type='grid' %}
  {% endfor %}
</div>

# Contact Form

{% include contact-form.html %}
