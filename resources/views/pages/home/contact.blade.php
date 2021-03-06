<div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">Contact</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Contact us to learn more.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> Delray Beach, Florida</p>
            <p><span class="glyphicon glyphicon-phone"></span> 800-555-1212</p>
            <p><span class="glyphicon glyphicon-envelope"></span> no-reply@whencanyoudoit.com</p>
        </div>
        <div class="col-sm-7">
            @if (count($errors) > 0)
                <div class="error-list">
                    <ul>
                        @foreach ($errors->unique() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="/contact-request">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" value="{{ old('comments') }}" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-info pull-right" type="submit">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div id="googleMap" class="googleMap"></div>
    </div>
</div>