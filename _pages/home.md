---
title: "Welcome to CUPLC"
layout: splash
permalink: /
date: 2022-02-28
header:
  overlay_color: "#000"
  overlay_filter: "0.5"
  overlay_image: /assets/images/home_cover.jpg
  caption: "Varsity 2020"


club_description:
  - image_path: /assets/images/lion_logo.png #TODO make this smaller
    alt: "CUPLC Lion"
    title: "The Club"
    excerpt: 'A sporting community of diverse experience and abilities brought together by a love of strength and self improvement. We practice the art of the squat, bench and deadlift.'
    url: "/the-club/"
    btn_label: "Read More"
    btn_class: "btn--primary"

the_three_powerlifts:
  - title: "Squat"
    image_path: /assets/images/unsplash-gallery-image-1.jpg
    excerpt: "At the referee's command, the athlete lowers themselves into a squatting position with the hips slightly below parallel position. The athlete then returns to a standing position"

  - title: "Bench"
    image_path: /assets/images/unsplash-gallery-image-2.jpg
    excerpt: "At the referee's command, the athlete lowers the bar to the chest, holding the bar motionless until the referee gives the press command. The athlete pushes the weight up until the arms are straight and the elbows locked."


  - title: "Deadlift"
    image_path: /assets/images/unsplash-gallery-image-3.jpg
    excerpt: "The king of the powerlifting disciplines. The athlete grasps the bar which is resting on the platform floor, pulls the weight off the floor and assumes a standing erect position"



feature_row3:
  - image_path: /assets/images/unsplash-gallery-image-2-th.jpg
    alt: "placeholder image 2"
    title: "Placeholder Image Right Aligned"
    excerpt: 'This is some sample content that goes here with **Markdown** formatting. Right aligned with `type="right"`'
    url: "#test-link"
    btn_label: "Read More"
    btn_class: "btn--primary"

feature_row4:
  - image_path: /assets/images/unsplash-gallery-image-2-th.jpg
    alt: "placeholder image 2"
    title: "Placeholder Image Center Aligned"
    excerpt: 'This is some sample content that goes here with **Markdown** formatting. Centered with `type="center"`'
    url: "#test-link"
    btn_label: "Read More"
    btn_class: "btn--primary"


recent_posts:
  - image_path: assets/images/unsplash-gallery-image-1-th.jpg
    alt: "placeholder image 1"
    title: "Placeholder 1"
    excerpt: "This is some sample content that goes here with **Markdown** formatting."
  - image_path: /assets/images/unsplash-gallery-image-2-th.jpg
    image_caption: "Image courtesy of [Unsplash](https://unsplash.com/)"
    alt: "placeholder image 2"
    title: "Placeholder 2"
    excerpt: "This is some sample content that goes here with **Markdown** formatting."
    url: "#test-link"
    btn_label: "Read More"
    btn_class: "btn--primary"
  - image_path: /assets/images/unsplash-gallery-image-3-th.jpg
    title: "Placeholder 3"
    excerpt: "This is some sample content that goes here with **Markdown** formatting."
---

{% include feature_row id="club_description" type="left" %}

## The three powerlifts
{% include feature_row id="the_three_powerlifts" %}

{% include feature_row id="club_description" type="center" %}

{% include feature_row %}



{% include feature_row id="feature_row3" type="right" %}

{% include feature_row id="feature_row4" type="center" %}
