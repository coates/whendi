<footer id="footer">
    <div class="container-fluid no-padding">
        <div class="row">
            <div class="col-sm-4 text-left">
                <p>&copy; Copyright 2017 fooyay</p>
            </div>
            <div class="col-sm-4 text-center">
                <p>Privacy Policy &mdash; Terms of Use</p>
            </div>
            <div class="col-sm-4 text-right">
                @if( date('H') > 5 or date('H') < 18 )
                    <p>Good Day.</p>
                @else
                    <p>Good Evening.</p>
                @endif
            </div>
        </div>
    </div>
</foooter>
<!-- JS -->
<script src="{{ elixir('js/app.js') }}"></script>

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>