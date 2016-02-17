@extends('layouts.app')

@section('content')
<div class="wrapper">
  <section id="hero">
    <div class="headshot">
      <img src="images/headshot.png" />
      <p class="hello">Hey.</p>
      <p>
        I am Bobby Holtzner<br/ >
        I am <span class="typed"></span>
      </p>
    </div>
  </section>
  <section id="about">
    <p>
      My name is Bobby Holtzner, I am a web, software, and mobile developer in Baltimore, MD. I currently work at Heron Systems in Alexandria, VA as a software developer. When I'm not working my day job, I build websites and web appliations for my personal clients as well as freelance.
    </p>
    <p>
      Outside of work, I'm a drag racer and a huge sports fan. I'm a die hard Baltimore Orioles, Baltimore Ravens, and Maryland Terps fan.
    </p>
    <p>
      I have a bachelors degree in Business Administration with a Management concentration from Towson University. I have been building websites and web applications since 2011 and have recently moved into the software and mobile space when I started working at Heron Systems in 2015.
    </p>
    <p>
      I love to discuss web development, work-flows and best business practices, when coding I specialize in the following technologies:
    </p>
    <div class="specialty-logos">

    </div>
  </section>
  <section id="recentPosts">
    <h3>Recent Posts</h3>
    <div class="singlePost">
      <div class="featured-image">
        <img src="/images/office.jpg"/>
      </div>
      <div class="post">
        <div class="categories">
          <span class="singleCategory">Mobile</span><span class="singleCategory">React</span><span class="singleCategory">Web</span>
        </div>
        <h1>Post Title</h1>
        <span class="date">February 15, 2016</span>
        <p class="postExcerpt">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean commodo ligula eget dolor.<a class="read-more" href="#">Read More <i class="ion-chevron-right"></i></a>
        </p>
      </div>
    </div>
    <div class="singlePost">
      <div class="featured-image">
        <img src="/images/office.jpg"/>
      </div>
      <div class="post">
        <div class="categories">
          <span class="singleCategory">Mobile</span><span class="singleCategory">React</span><span class="singleCategory">Web</span>
        </div>
        <h1>Post Title</h1>
        <span class="date">February 15, 2016</span>
        <p class="postExcerpt">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean commodo ligula eget dolor.<a class="read-more" href="#">Read More <i class="ion-chevron-right"></i></a>
        </p>
      </div>
    </div>
  </section>
  <section id="subscribe">
    <div id="mc_embed_signup">
      <form action="//bobbyholtzner.us12.list-manage.com/subscribe/post?u=6d4b86fd6d1e15f344c24155d&amp;id=5485199221" method="post"  id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
          	<label for="mce-EMAIL">Subscribe to my newsletter for links and other inside content that may not make it to the blog:</label>
          	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your Email..." required>
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6d4b86fd6d1e15f344c24155d_5485199221" tabindex="-1" value=""></div>
              <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
      </form>
    </div>
  </section>
</div>
@endsection
