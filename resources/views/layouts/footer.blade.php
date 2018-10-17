                <!-- Footer --> 
                <footer>
                    <div class="copy">© 2016 TRUX.AI. All rights reserved.</div>
                </footer>
            </main>
        </div>
        <!-- jQuery Scripts -->
        <script src="{{ asset('public/js/jquery.min.js.download') }}"></script>
        <script src="{{ asset('public/js/materialize.js.download') }}"></script>
        <script src="{{ asset('public/js/magnific-popup.js.download') }}"></script>
        <!-- Google map api -->
        <script type="text/javascript" src="{{ asset('public/js/js') }}"></script>
        <!-- Main Scripts -->
        <script src="{{ asset('public/js/main.js.download') }}"></script>
       
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script>
            // document.addEventListener("change", function(event) {
            //     let element = event.target;
            //     if (element && element.matches(".form-element-field")) {
            //         element.classList[element.value ? "add" : "remove"]("-hasvalue");
            //     }
            // });
            // document.addEventListener('DOMContentLoaded', function() {
            //     var elems = document.querySelectorAll('.autocomplete');
            //    // var instances = M.Autocomplete.init(elems, options);
            // });
            // $(document).ready(function() {
            //     $('input.autocomplete').autocomplete({
            //         data: {
            //             "United Arab of Emirates": null,
            //             "Pakistan": null,
            //             "India": null,
            //             "Google": 'https://placehold.it/250x250'
            //         },
            //     });
            //     $("#small1").hide();
            //     $("#light1").hide();
            //     $("#medium1").hide();
            //     $("#heavy1").hide();
            //     $("#specialized1").hide();
            // });    
            function toggleCheck(id){
                if($("#"+id).prop('checked')){
                    $("#"+id+"1").show(300);
                }else{
                    $("#"+id+"1").hide(300);
                }
            }
            //var instance = M.Tabs.init(el, options);
            // Or with jQuery
            $(document).ready(function(){
                $('.tabs').tabs();
            }); 
        </script>
        <!--  <script src="{{ asset('public/js/jquery.validate.js.download') }}"></script>  -->
    </body>
</html>