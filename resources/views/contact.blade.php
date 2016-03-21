@extends('layouts.internal')
@section('title', 'Contact me | Bobby Holtzner | Mobile, Web, Software Developer')
@section('content')
  <h1>Reach Out!</h1>
  <p>
    Fill out this contact form to get in touch!
  </p>
  <div id="contactForm">
    <form id="contact" v-show="!responseObject.success">
      <input type="hidden" id="_token" name="_token" value="<?php echo csrf_token(); ?>">
      <div class="form-group">
        <input type="text" v-model="name" class="form-control" required placeholder="Your Name *" />
      </div>
      <div class="form-group">
        <input type="email" v-model="email" class="form-control" placeholder="Your Email *" required />
      </div>
      <div class="form-group">
        <textarea class="form-control" v-model="message" placeholder="Your Message" required></textarea>
      </div>
      <div class="form-group">
        <div class="g-recaptcha" data-sitekey="6LdhQBsTAAAAAOttEvvWj4u_gwk_hkqCQaqJvDtQ"></div>
      </div>
      <div class="form-group">
        <button type="submit" v-on:click="collect" :disabled="loading" id="submit"  class="btn btn-primary">Send Message<i v-show="loading" class="ion-loading-c"></i></button>
      </div>
    </form>
    <div class="response" v-bind:class="responseObject" v-show="responseObject.success || responseObject.error">
      <p>
        @{{responseObject.message}}
      </p>
    </div>
  </div>
@endsection
@section('scripts')
  <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
