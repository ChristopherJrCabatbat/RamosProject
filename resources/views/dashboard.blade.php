@extends('layout.layout')

@section('title', 'Sherlock Studio')

@section('content')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .service {
            flex-basis: calc(33.33% - 2rem);
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin-bottom: 2rem;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            border-radius: 8px;
        }

        .service:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .service h2 {
            margin: 0;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            color: #333;
        }

        .service p {
            margin: 0;
            font-size: 1rem;
            color: #666;
        }

        .portfolio {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin: 2rem auto;
            text-align: center;
            max-width: 800px;
            border-radius: 8px;
        }

        .portfolio h2 {
            margin: 0;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: #333;
        }

        .portfolio img {
            max-width: 100%;
            height: auto;
            margin-bottom: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .testimonials {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin: 2rem auto;
            text-align: center;
            max-width: 800px;
            border-radius: 8px;
        }

        .testimonials h2 {
            margin: 0;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: #333;
        }

        .testimonials p {
            margin: 0;
            margin-bottom: 1.5rem;
            font-size: 1.2rem;
            color: #666;
        }
    </style>

    <div class="container">
        <div class="services">
            <div class="service">
                <h2>Wedding Photography</h2>
                <p>Let us capture the magic of your special day.</p>
            </div>
            <div class="service">
                <h2>Commercial Videography</h2>
                <p>Elevate your brand with captivating videos.</p>
            </div>
            <div class="service">
                <h2>Event Coverage</h2>
                <p>Relive the best moments of your events.</p>
            </div>
            <div class="service">
                <h2>Portrait Sessions</h2>
                <p>Discover your unique essence with our portraits.</p>
            </div>
        </div>

        <div class="portfolio">
          <h2>Portfolio Showcase</h2>
          <div class="project">
              <h3>Wedding Photography - "Love in Bloom"</h3>
              <p>A collection of stunning photographs capturing the joy and romance of weddings.</p>
              <img src="https://via.placeholder.com/800x400" alt="Love in Bloom - Wedding Photography">
          </div>
          <div class="project">
              <h3>Commercial Videography - "Rise and Shine"</h3>
              <p>An engaging video campaign showcasing the resilience and success of our client's brand.</p>
              <img src="https://via.placeholder.com/800x400" alt="Rise and Shine - Commercial Videography">
          </div>
          <div class="project">
              <h3>Event Coverage - "Moments to Remember"</h3>
              <p>A comprehensive documentation of memorable moments from various events, from corporate gatherings to social celebrations.</p>
              <img src="https://via.placeholder.com/800x400" alt="Moments to Remember - Event Coverage">
          </div>
      </div>
      

        <div class="testimonials">
            <h2>Client Testimonials</h2>
            <p>"Sherlock Studio captured our wedding memories beautifully. Highly recommended!"</p>
            <p>"The professionalism and creativity of the team exceeded our expectations."</p>
        </div>
    </div>
@endsection
