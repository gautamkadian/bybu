@extends('layouts.app')

@section('title', 'About Us')

@section('content')

  <div class="menu-bar">
    @include('_partials.plainnavbar')
  </div>

  <section>
    <div class="columns about-us-page">
      <div class="column">
        <h1>About Bybu</h1>
      </div>
    </div>
    <v-container>
      <v-layout class="about-us-page-text">
        <v-flex>
          <div class="headline">Bybu is a place where you can give, get, promote, and explore design with code and free PSD.</div>
          <p>Bybu is a community of designers / developers. Web designers, graphic designers, doodlers, illustrators, icon artists, typographers, logo designers and other creative people publish their work and allow it to be downloaded or used for any purpose.</p>
          <p>Founded in 2018, Bybu has grown into an adorable and inspiring destination for many people. Bybu has the mission to build the best and free platform in the world for designers, professionals and non-professionals to get inspiration, comments, community and help others for free.</p>
          <p>Bybu is an easy-to-use tool for web designers and freelancers. Bybu - Showcase is free. With the help of our system you can present your design in a browser. Everything is very easy, simply upload your design and send the unique generated url to the client.</p>
        </v-flex>
      </v-layout>
    </v-container>
  </section>

  @include('_partials.footer')

@endsection
