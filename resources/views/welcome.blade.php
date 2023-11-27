<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Inflow Technology</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Styles -->

        <link rel="stylesheet" href="./style/main.css?v=1" />

    </head> 
    <body class="antialiased">
        <video playsinline autoplay muted loop >
            <source src="{{url('image/cube.webm')}}" type="video/webm"> 
        </video>

        <div class="page-content">
            <!-- Title Name -->
            <section class="container-inflow heading-style">
                <div class="content text-center">
                    <h2>Welcome to <img class="logo" src='{{ url("image/logo_transparent.png")}}' ><br>Inflow Technology Limited</h2>
                    <p>We are a startup company based in Hong Kong that specializes in website development, AI and application development, and other innovative technologies. Our mission is to be at the forefront of the next generation of technology. Let us help you build the future!</p>
                </div>

            </section>

            <!-- introduction -->
            <section class="container-inflow">
                <div class="content">
                    <h2>About Inflow Technology Limited</h2>
                    <div class="row">
                        <div class="col-md-6 part">
                            <h4>Who We Are</h4>
                            <p>We are a team of experienced developers, designers, and innovators who are passionate about making the world a better place through technology.</p>
                        </div>
                        <div class="col-12 col-md-6 part">
                            <h4>Our History</h4>
                            <p>Founded in 2023, Inflow Technology Limited has quickly established itself as a leading provider of innovative, high-quality technology solutions.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 part">
                            <h4>Our Culture</h4>
                            <p>At Inflow Technology Limited, we place a high value on collaboration, creativity, and excellence. We believe that by working together, we can achieve great things.</p>
                        </div>
                        <div class="col-12 col-md-6 part">
                            <h4>Our Goals</h4>
                            <p>We are committed to providing our clients with the best possible technology solutions, while also making a positive impact on the world around us.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- introduction -->
            <section class="container-inflow">
                <div class="content">
                    <h2>Our Mission and Values</h2>
                    <div class="row">
                        <div class="col-md-6 part">
                            <h4>Mission</h4>
                            <p>At Inflow Technology Limited, our mission is to be a leader in the development of innovative technology solutions that help build a better future.</p>
                        </div>
                        <div class="col-12 col-md-6 part">
                            <h4>Values</h4>
                            <ul>
                                <li>Innovation</li>
                                <li>Creativity</li>
                                <li>Excellence</li>
                                <li>Sustainability</li>
                                <li>Social Responsibility</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container-inflow">
                <div class="content">
                    <h2>Our Products and Services</h2>
                    <div class="row">
                        <div class="col-md-6 part">
                            <img class="porduct" src='{{ url("image/service1.png")}}'>
                            <h4>Website Development</h4>
                            <p>We specialize in creating beautiful, responsive, and user-friendly websites that help our clients achieve their goals.</p>
                        </div>
                        <div class="col-12 col-md-6 part">
                            <img class="porduct"  src='{{ url("image/service2.png")}}'>
                            <h4>AI and Application Development</h4>
                            <p>We specialize in creating beautiful, responsive, and user-friendly websites that help our clients achieve their goals.</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="container-inflow">
                <div class="content">
                    <h2>Contact Information</h2>
                    <div class="row">
                        <div class="col-md-6 part">
                            <h4>Contact</h4>
                            <p>For any inquiries, please contact us:</p>
                            <p>Whatsapp/Phone: +852 5330 7106</p>
                            <p>Email: <a href="mailto:info@inflow-t.com">info@inflow-t.com</a></p>
                        </div>
                        <div class="col-12 col-md-6 part">
                            <h4>Address</h4>
                            <p>Our office is located at UNIT 705, 7/F, 9 WING HONG STREET, CHEUNG SHA WAN, KOWLOON, HONG KONG</p>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-12 part">
                            <h4>Message Box</h4>
                            <x-form :action="route('contact.store')" method="post" class="form-style" >
                                @csrf
                                <x-form-input class="style-input" type="text" name="name" id="name" placeholder="Name" />
                                <x-form-input class="style-input" type="email" name="email" id="email" placeholder="E-mail" />
                                <x-form-input class="style-input" type="phone" name="phone" id="phone" placeholder="Phone / Whatsapp" />
                                <x-form-input class="style-input" type="subject" name="subject" id="subject" placeholder="Subject" />
                                <x-form-textarea class="style-textarea" name="message" id="message" rows="4" placeholder="Message leave to us..."/>
                                <x-form-submit class="btn btn-primary"/>
                            </x-form >
                        </div>
                    </div>  -->
                </div>
            </section>
        </div>
        <script src="./js/style.js"></script>
    </body>
</html>
