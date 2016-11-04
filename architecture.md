---
layout: page
title: architecture
permalink: /architecture/
---

bla bla bla


{% for post in site.posts %}
  <a href="{{ post.url | prepend: site.baseurl }}" class="img-wrap">
    <div class="description description--grid">
      <h3>Mother's Love</h3>
      <p>Every time you drink a glass of milk or eat a piece of cheese, you harm a mother. Please go vegan. <em>&mdash; Gary L. Francione</em></p>
    </div>
    <li class="item">
        {% if post.image %}
      <img src="{{ post.image }}" alt="" class="thumb">
        {% endif %}
    </li>
  </a>

{% endfor %}
