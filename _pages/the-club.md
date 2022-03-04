---
title: "The Club"
layout: splash
permalink: /the-club/
date: 2022-02-28
header:
  overlay_color: "#000"
  overlay_filter: "0.5"
  overlay_image: /assets/images/home_cover.jpg
  caption: "Varsity 2020"

club_mission:
  - image_path: /assets/images/the-club/bea.jpg
    title: "Club Mission"
    excerpt: 'The core aim of CUPLC is to produce a team to defeat O****d at the annual powerlifting Varsity match. Our mission is to promote the sport of powerlifting within the University by teaching the art of lifting and supporting those who wish to compete wherever possible.'
    url: "#test-link"
    btn_label: "Read More"
    btn_class: "btn--primary"

what_is_powerlifting:
  - image_path: /assets/images/the-club/pres.jpeg
    title: "What is powerlifting?"
    excerpt: "Powerlifting is a strength sport consisting of three events: the squat, the bench press and the deadlift. The lifter gets three attempts at a 1 rep max for each lift. Your best succesful attempts are summed, giving you a total. This total is what one seeks to optimise, given a certain weight class. "

the_three_powerlifts:
  - title: "Squat"
    image_path: /assets/images/the-club/bench.jpg
    excerpt: "At the referee's command, the athlete lowers themselves into a squatting position with the hips slightly below parallel position. The athlete then returns to a standing position"
  - title: "Bench"
    image_path: /assets/images/the-club/bench.jpg
    excerpt: "At the referee's command, the athlete lowers the bar to the chest, holding the bar motionless until the referee gives the press command. The athlete pushes the weight up until the arms are straight and the elbows locked."
  - title: "Deadlift"
    image_path: /assets/images/the-club/deadlift.jpg
    excerpt: "The king of the powerlifting disciplines. The athlete grasps the bar which is resting on the platform floor, pulls the weight off the floor and assumes a standing erect position"

how_we_operate:
  - image_path: /assets/images/the-club/yaron.jpg
    title: "How we operate"
    excerpt: "You might wonder what the purpose of our club is given powerlifting is a solo sport: We advise and coach individuals in the best way to achieve their goals. We offer beginning coaching sessions at the start of the year, and regular team training sessions at the University Sports Centre almost every Saturday of full term from 5-7pm. We host in house competitions, for those who'd like to give competing a try in the comfort of our own gym. Our socials are also top class."
    url: "/membership/"
    btn_label: "Become a member"
    btn_class: "btn--primary"

training:
  - image_path: /assets/images/the-club/uni-gym.jpg
    title: "Training"
    excerpt: "Some members join just to be part of a friendly group of individuals who share a love of weight training, with no intention of ever competing. Some train to compete in Varsity, and some compete internationally. As such, there is no right way to train that suits all needs and abilities and powerlifting is therefore perfect for the busy Cambridge student looking to keep in shape, be part of a supportive team but not be tied into regimented training times. That said, many of us choose to train in the evenings at the University Sports Centre with others."


competing:
  - image_path: /assets/images/the-club/sal.jpg
    title: "Competing"
    excerpt: "While there is no obligation to, we encourage our members to give competing a go... blues standard"
    url: "/competitions/"
    btn_label: "More on competing"
    btn_class: "btn--primary"

committee:
  - image_path:
    title: "Committee"
    excerpt: 'Our committee make sure...'
    url: "/committee/"
    btn_label: "Membership perks"
    btn_class: "btn--primary"
---

{% include feature_row id="club_mission" type="left" %}

{% include feature_row id="what_is_powerlifting" type="right" %}

{% include feature_row id="the_three_powerlifts" %}

{% include feature_row id="how_we_operate" type="left" %}

{% include feature_row id="training" type="right" %}

{% include feature_row id="competing" type="left" %}

{% include feature_row id="committee" type="right" %}
