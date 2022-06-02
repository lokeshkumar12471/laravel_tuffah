<div class="relative px-8 py-8 xl:px-20 2xl:mx-auto 2xl:container">
    <div class="review-widget_net" data-uuid="{{ $gr_count_api }}" data-template="10" data-filter="" data-lang="en"
        data-theme="light">
        <center>
            <a href="https://www.review-widget.net/" target="_blank" rel="noopener"><img
                    src="https://grwapi.net/assets/spinner/spin.svg" title="Google Review Widget"
                    alt="Review Widget"></a>
        </center>
    </div>
    <div id="cws_google_reviews" class="mt-12"></div>

</div>
@push('scripts')
    <script async type="text/javascript" src="https://grwapi.net/widget.min.js"></script>
    <script>
        function load_google_reviews(place) {

            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == XMLHttpRequest.DONE) { // XMLHttpRequest.DONE == 4
                    if (xmlhttp.status == 200) {
                        document.getElementById("cws_google_reviews").innerHTML = xmlhttp.responseText;

                        document.getElementById("powered_by_cws").style.cssText = "; display:block !important;";
                    } else if (xmlhttp.status == 400) {
                        document.getElementById("cws_google_reviews").innerHTML(
                            '<p>There was an error processing your reviews.<br /><small>[code: 400]</small></p>');
                    } else {
                        document.getElementById("cws_google_reviews").innerHTML(
                            '<p>Unknown error occured.<br /><small>[code: 600]</small></p>');
                    }
                }
            };

            xmlhttp.open("POST", "https://googlereviews.cws.net/display-reviews.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("place=" + place);
        }
    </script>

    <script>
        var gr_api = "{{ $gr_api }}";
        load_google_reviews(gr_api);
    </script>
@endpush
