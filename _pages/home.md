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

club_mission:
  - image_path: /assets/images/logos/arty_lion.png
    title: "Club Mission"
    excerpt: "CUPLC's goals are two fold. We firstly seek to be a community of people sharing a love of lifting. Our members comprise experienced international powerlifters holding national records to novice lifters just starting out. Secondly, we encourage and facilitate members competing wherever possible, including against Oxford at our annual Varsity match."

logo_gallery:
  - image_path: /assets/images/logos/cam.png
  - image_path: /assets/images/logos/cam_sport.png
  - image_path: /assets/images/logos/british_powerlifting.png
  - image_path: /assets/images/logos/ipf.png

what_is_powerlifting:
  - image_path: /assets/images/the-club/pres.jpeg
    title: "What is powerlifting?"
    excerpt: "Powerlifting is a strength sport consisting of three events: the squat, the bench press and the deadlift, descriptions of which may be found below. The lifter gets three attempts at a 1 rep max for each lift. Your best succesful attempts are summed, giving you a total. This total is what one seeks to optimise, given a certain weight class. "

the_three_powerlifts:
  - title: "Squat"
    image_path: /assets/images/the-club/squat.jpg
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
    excerpt: "You might wonder what the purpose of our club is given powerlifting is a solo sport. We advise and coach individuals in the best way to achieve their goals. We offer beginning coaching sessions at the start of the year, and regular team training sessions at the University Sports Centre almost every Saturday of full term from 4-6pm. We host in house competitions, for those who'd like to give competing a try in the comfort of our own gym. Our socials are also top class."
    url: "/membership/"
    btn_label: "Become a member"
    btn_class: "btn--primary"

training:
  - image_path: /assets/images/the-club/uni-gym.jpg
    title: "Training"
    excerpt: "Some members join just to be part of a friendly group of individuals who share a love of weight training, with no intention of ever competing. Some train to compete in Varsity, and some compete internationally. As such, there is no right way to train that suits all needs and abilities. Powerlifting is perfect for the busy Cambridge student looking to keep in shape, be part of a supportive team but not be tied into regimented training times. That said, any of us choose to train in the evenings at the University Sports Centre with others."

competing:
  - image_path: /assets/images/the-club/vik.jpg
    title: "Competing"
    excerpt: "We are a very accessible club for those who wish to get stronger, even those with no aspirations to compete. Everyone is welcome. While there is no obligation to, we encourage our members to give competing a go. While initially intimidating, competing can be a very satisfying and fulfilling experience, and the club is here to support newcomers to the sport. Our informal internal competitions provide an excellent opportunity to give it a go."
    url: "/competitions/"
    btn_label: "More on competing"
    btn_class: "btn--primary"

committee:
  - image_path: /assets/images/the-club/suzandsal.jpg
    title: "Committee"
    excerpt: 'Our committee are responsible for the day to day running of the club. We organise club events, socials, and internal competitions. We try to promote and spread the joy of powerlifting.'
    url: "/committee/"
    btn_label: "Meet the committee"
    btn_class: "btn--primary"

---
{% include feature_row id="club_mission" type="center" %}

{% include gallery id="logo_gallery" layout="fourth bottomborder" %}

# Recent Blog Posts [View More](/blog/){: .btn .btn--primary .align-right}

<div class="entries-grid">
  {% for post in site.posts limit:4 %}
    {% include archive-single.html type='grid' %}
  {% endfor %}
</div>

{% include feature_row id="what_is_powerlifting" type="left" %}

{% include feature_row id="the_three_powerlifts" %}

{% include feature_row id="how_we_operate" type="right" %}

{% include feature_row id="training" type="left" %}

{% include feature_row id="competing" type="right" %}

{% include feature_row id="committee" type="left" %}


# Get in touch
If you have any questions beyond the content of the website, please do get in touch with general enquiries here, or contact the relevant [committee member]({{site.url}}/{{site.baseurl}}/committee/) directly.

{% include contact-form.html %}
