    $("form#singal_owner_form").submit(function(){
        var email = $("#username").val();
        //var email = $('#email').val();s
        var reg = /^([\w-\.]+@(?!gmail.com)(?!yahoo.com)(?!hotmail.com)(?!yahoo.co.in)(?!aol.com)(?!abc.com)(?!xyz.com)(?!pqr.com)(?!rediffmail.com)(?!live.com)(?!outlook.com)(?!me.com)(?!msn.com)(?!ymail.com)([\w-]+\.)+[\w-]{2,4})?$/;
        if (reg.test(email)==false ){
            $("#username").parent().addClass('form-has-error');
            $("#username").parent().show();
            $("#username").text(value);
            setTimeout(function(){ 
                $("#username").parent().removeClass('form-has-error');
                $("#username").parent().hide();
                $("#username").text('');
            }, 3000);
            return false;
        }
        var formData = new FormData($(this)[0]);
        $.ajax({
            url : "{{ route('single_owner') }}",
            type : "POST",
            data : formData,
            async  : false,
            success : function(data){
                console.log(data);
                var res =$.parseJSON(data);
                //
                if(res.status ==1){
                    $('#popup-5').show();
                } else {
                    $('#popup-5').show();
                }
            }, error: function(data){
                var rr = $.parseJSON(data.responseText) ;
                console.log(rr.errors); //status responseJSON 422
                $.each(rr.errors, function(key, value){
                    //alert(key + '--'+value) ;
                    $("#"+key).parent().addClass('form-has-error');
                    $("#msg_"+key).parent().show();
                    $("#msg_"+key).text(value);
                    setTimeout(function(){ 
                        $("#"+key).parent().removeClass('form-has-error');
                        $("#msg_"+key).parent().hide();
                        $("#msg_"+key).text('');
                    }, 3000);
                });
            },
            cache : false ,
            contentType : false ,
            processData : false
        }) ;
        return false ;
    }) ;
    function check_phone(key){
        var digit = $("#"+key).val().toString()[0];
        var value = $("#"+key).val();
        if(digit!= 5 || value.length > 9){
        
            $("#"+key).parent().addClass('form-has-error');
            $("#msg_"+key).parent().show();
            $("#msg_"+key).text('Phone numbers start with 5 and length should be 9');

            $("#"+key).val('') ;
            setTimeout(function(){ 
                $("#"+key).parent().removeClass('form-has-error');
                $("#msg_"+key).parent().hide();
                $("#msg_"+key).text('');
            }, 3000);
            return false ;
        } else {
            setTimeout(function(){ 
                $("#"+key).parent().removeClass('form-has-error');
                $("#msg_"+key).parent().hide();
                $("#msg_"+key).text('');
            }, 3000);
        }
    } 
    var availablecityTags = [];
    function getCity(countryId,countryName){
        $.ajax({
            url: "{{route('getcitylist')}}",
            type: "GET",
            data: {countryId : countryId,countryName:countryName},
            success:function(JSONValue) {
                callbackCity(JSONValue);
            }
        });
    } 
    function changecountry(){ 
        var contryname=$('#owner_country').val(); 
        var country = $("#country").val();
        if(contryname=="" || country ==''){
            $('#owner_city').val(""); 
            $('#city').val(""); 
        } else {
            getCity('',contryname);
        }
    }
    $(function() {
        /***********Get Country List**********/
        $.ajax({
            url: "{{ route('getCountryList') }}",
            type: "GET",
            success:function(JSONValue) { 
                availableTags = [];
                var myObj = JSON.parse(JSONValue); 
                $.each(myObj, function(key,val) {
                    var newcountry={key:key ,value: val};
                    availableTags.push(newcountry);
                });
                $( "#owner_country" ).autocomplete({
                    minLength: 0,
                    source: availableTags,
                    focus: function( event, ui ) {
                        $( "#owner_country" ).val( ui.item.value );
                        return false;
                    }, select: function( event, ui ) {
                        $('#owner_city').val("");
                        $( "#owner_country" ).val( ui.item.value );
                        var countryName =  (ui.item.value);
                        var contryname=$('#owner_country').val();
                        getCity('',countryName);
                        return false;
                    } 
                });
                $( "#country" ).autocomplete({
                    minLength: 0,
                    source: availableTags,
                    focus: function( event, ui ) {
                        $( "#country" ).val( ui.item.value );
                        return false;
                    }, select: function( event, ui ) {
                        $('#city').val("");
                        $( "#country" ).val( ui.item.value );
                        var countryName =  (ui.item.value);
                        var contryname=$('#country').val();
                        getCity('',countryName);
                        return false;
                    } 
                });
            }
        });   
    });   
    /********End Country List************/
    $( "#owner_city" ).autocomplete({
        minLength: 0,
        source: availablecityTags,
        focus: function( event, ui ) {
            $( "#owner_city" ).val( ui.item.value );
            return false;
        }, select: function( event, ui ) {
            $( "#owner_city" ).val( ui.item.value );
            return false;
        } 
    });
    $( "#city" ).autocomplete({
        minLength: 0,
        source: availablecityTags,
        focus: function( event, ui ) {
            $( "#city" ).val( ui.item.value );
            return false;
        }, select: function( event, ui ) {
            $( "#city" ).val( ui.item.value );
            return false;
        } 
    });
    function callbackCity(data) { 
        availablecityTags = [];
        var myObj = JSON.parse(data); 
        $.each(myObj, function(key,val) {
            var newcity={key:key ,value: val};
            availablecityTags.push(newcity);
        });
        $("#owner_city").autocomplete({
            minLength: 0,
            source: availablecityTags,
            focus: function( event, ui ) {
                $( "#owner_city" ).val( ui.item.value );
                return false;
            },
            select: function( event, ui ) {
                $( "#owner_city" ).val( ui.item.value );
                return false;
            } 
        });
        $("#city").autocomplete({
            minLength: 0,
            source: availablecityTags,
            focus: function( event, ui ) {
                $( "#city" ).val( ui.item.value );
                return false;
            },
            select: function( event, ui ) {
                $( "#city" ).val( ui.item.value );
                return false;
            } 
        });
    }
    $('#popup-5').addClass('mfp-hide');
