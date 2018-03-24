<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Amiott's</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/app.css" rel="stylesheet" type="text/css"/>
    <script src="/js/app.js" rel="text/javascript"></script>

</head>

<body>
<div class="topImage">
    <img class="topImage" src="/img/artsy-vibes-277413-unsplash.jpg">

    <div class="container">
            <div>
                <h1 class="raleway">You're invited!</h1>
                        <button id="rsvpButton" class="rsvpButton" data-toggle="modal" data-target="#modal">RSVP</button>
            </div>
    </div>
</div>


<div class="pageView">
    <br>
    <div>
        <p class="celeText">Please join us for a <br></p>
        <p class="celeText bottom">celebration!</p>
    </div>
    <div class="inviteText col-sm">
        <p class="closer upper">DATE & TIME</p>
        May 27, 2018 at 6PM
        <br>
        <br>
        <p class="closer upper">LOCATION</p>
        The Springs<br> 123 Main<br> Weatherford, TX 76040
    </div>

    <div class="inviteText col-sm rightText">
        <p class="closer upper">DETAILS</p>
        <p class="closer">
            Come help us celebrate the marriage<br>
            of Hunter Rae Williams and Destry Clay Amiott.
        </p>
    </div>
</div>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26868.546036661708!2d-97.82194906006475!3d32.67093154036171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8651fd494a03dc97%3A0x6f78f19bcf6e7106!2sTHE+SPRINGS+Event+Venue!5e0!3m2!1sen!2sus!4v1521523262211" width="1790" height="568" frameborder="0" style="border-bottom: solid grey 1px;" allowfullscreen></iframe>
</div>

<div class="secondView">
    <br>
    <div>
        <p class="celeText">Gift Registry<br></p>
    </div>
    <div style="margin-top: -2.5%;">
        <p class="inviteText">
            If you would like to purchase a gift from our registry, please check our registry out on MyRegistry.com!
        </p>
    </div>
    <div>
        <a target="_blank" href="https://www.myregistry.com/wedding-registry/Destry-Amiott-and-Hunter-Williams-Euless-TX/1558802">
            <button class="regButton">
                REGISTRY
            </button>
        </a>
    </div>
</div>
<div class="secondView accent">
    <br>
    <div>
        <p class="celeText" style="color: #ffffff;">RSVP</p>
    </div>
    <div class="regBox">
        <br>
        <p class="regText" style="margin-top: 10px;"><strong>Are you attending?</strong></p>
        <div class="row">
            <button class="regButtonNew"><strong>YES</strong></button>
            <button class="regButtonNew"><strong>NO</strong></button>
        </div>
    </div>
</div>
<div class="thirdView">
    <p class="contText">
        This wedding is hosted by Hunter Williams and Destry Amiott.
    </p>
    <button class="contButton">CONTACT US</button>
</div>


<!-- The modal, wrapped in an overlay -->
<div class="modal fade" id="modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <form method="POST" role="form" action="/rsvp">

        <div class="modal-content modal-custom">
            <div class="modal-header modal-custom-header">
                <h3 class="modal-title modal-custom-title">Great, glad to hear it!</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Just some information we need to get first!</p>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label class="col-md-4 control-label">First Name</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control custom-form-control" name="firstName" value="{{ old('firstName') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Last Name</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control custom-form-control" name="lastName" value="{{ old('lastName') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Bringing a dance partner?</label>
                    <div class="col-md-6">
                        <input type="checkbox" class="form-control custom-form-checkbox" name="plusOne" value="1">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
        </form>

    </div>
</div>
</body>
</html>
