$(function(){
    var files = {};
    var formData = new FormData();

    $.fn.hasAttr = function(name) {  
        return this.attr(name) !== undefined;
    };
    $('.custome-check').each(function(e){
        var $this = $(this),
        $type = $this.attr('type'),
        $checked = $this.hasAttr('checked') ? ' input-'+$type+'-check' : '',
        $name = $this.attr('name') ? ' name="'+$this.attr('name')+'"' : '',
        $value = $this.attr('value') ? ' value="'+$this.attr('value')+'"' : '';
        $this.wrapAll('<div class="new-checkbox'+$checked+' sprited input-'+$type+'" type="'+$type+'"'+$name+$value+' />');
    });
    $('.new-checkbox').click(function(){
        var $type = $(this).attr('type'),
        $name = $(this).attr('name');
        if( $('.new-checkbox[type="'+$type+'"]').length > 0){
            if( typeof $name != 'undefined' ){
                if( $('.new-checkbox[type="'+$type+'"][name="'+$name+'"]').length > 0 ){
                    if( $name.indexOf("[") > -1 ){
                        if( $(this).hasClass('input-'+$type+'-check') ){
                            $(this).removeClass('input-'+$type+'-check').find('input').removeAttr('checked');
                        }else{
                            $(this).addClass('input-'+$type+'-check').find('input').attr('checked', 'checked');
                        }
                    }else{
                        if( $(this).hasClass('input-'+$type+'-check') ){
                            $(this).removeClass('input-'+$type+'-check').find('input').removeAttr('checked');
                        }else{
                            $('.new-checkbox[type="'+$type+'"][name="'+$name+'"]:visible').removeClass('input-'+$type+'-check').find('input').removeAttr('checked');
                            $(this).addClass('input-'+$type+'-check').find('input').attr('checked', 'checked');
                        }
                        if( $('.input-'+$type+'-check[type="'+$type+'"][name="'+$name+'"]:visible').length == 0){
                            if( $(this).hasClass('input-'+$type+'-check') ){
                                $(this).removeClass('input-'+$type+'-check').find('input').removeAttr('checked');
                            }else{
                                $('.new-checkbox[type="'+$type+'"][name="'+$name+'"]:visible').removeClass('input-'+$type+'-check').find('input').removeAttr('checked');
                                $(this).addClass('input-'+$type+'-check').find('input').attr('checked', 'checked');
                            }
                        }
                    }
                }else{
                    if( $(this).hasClass('input-'+$type+'-check') ){
                        $(this).removeClass('input-'+$type+'-check').find('input').removeAttr('checked');
                    }else{
                        $(this).addClass('input-'+$type+'-check').find('input').attr('checked', 'checked');
                    }
                }
            }else{
                if( $(this).hasClass('input-'+$type+'-check') ){
                    $(this).removeClass('input-'+$type+'-check').find('input').removeAttr('checked');
                }else{
                    $(this).addClass('input-'+$type+'-check').find('input').attr('checked', 'checked');
                }
            }
        }
    });
    $('.show-calendar a').click(function(){
        var type = $(this).attr('class');
        $('.list-seasons .input-checkbox[value="'+type+'"]').click();
        return false;
    });
    if($('#map_canvas').length > 0){
        var geocoder;
        var map;
        var markers = [];
        function initialize() {
            geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(34.1030032, -118.4104684);
            var mapOptions = {
                zoom: 14,
                center: latlng
            }
            map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
        }
        function addMarker(location) {
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
            markers.push(marker);
        }
        function setAllMap(map) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        }
        function codeAddress(address) {
            geocoder.geocode( {
                'address': address
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    addMarker(results[0].geometry.location);
                }
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        function showmap(){
            if($('#zip-selected').length > 0 && $('#zip-selected').val() != ''){
                var loca_arr = $('#zip-selected').val().split(' ');
                for (var k = 0; k < loca_arr.length; k++) {
                    if(loca_arr[k] != ''){
                        codeAddress(loca_arr[k]);
                    }
                };
            }else{
                setAllMap(null);
            }
        }
        function getvals(){
            var map_vals = '';
            $('.input-radio-check input').each(function(){
                map_vals += $(this).val()+' ';
            });
            $('#zip-selected').val(map_vals);
            showmap();
        }
        $('#zip-selected').keyup(function(e){
            if(e.keyCode == 13){
                var loca_arr = $(this).val().split(' ');
                $('.input-radio > input').removeAttr('checked');
                $('.input-radio').removeClass('input-radio-check');
                for (var j = 0; j < loca_arr.length; j++) {
                    if(loca_arr[j] != ''){
                        setAllMap(null);
                        $('.input-radio[value="'+loca_arr[j]+'"] > input').attr('checked', 'checked');
                        $('.input-radio[value="'+loca_arr[j]+'"]').addClass('input-radio-check');
                    }
                };
                showmap();
                return false;
            }
        });
    }
    $('.new-checkbox').click(function(){
        var $innerInput = $(this).find('input');
        var $this_val = $innerInput.data('size');
        var img_src = $innerInput.data('image');

        if($this_val == 'small'){
            $('.zoom strong').html('Small');
            $('.price-option-preview img').attr('src', img_src);
        }else if($this_val == 'large'){
            $('.zoom strong').html('Large');
            $('.price-option-preview img').attr('src', img_src);
        }else{
            getvals();
        }
    });
    var win_width = $(window).width(),
    win_height = $(window).height();
    $('.view-image').click(function(){
        var src = $(this).attr('href'),
        html = '<div class="overlay"></div><div class="show-popup"><a class="pop-close" href="popup:close();"></a><div><img src="'+src+'"></div></div>';
        $('body').append(html);
        $('.show-popup img').load(function(){
            var image_width = $(this).width(),
            image_height = $(this).height(),
            show_width = image_width < win_width ? image_width : win_width - 40,
            show_height = image_height < win_height ? image_height : win_height - 40;
            alert
            $('.show-popup').css({
                'width': show_width,
                'height': show_height ,
                'margin-top': -(show_height / 2) - 12,
                'margin-left': -(show_width / 2) - 12
            });
        });
        $('.pop-close').click(function(){
            $('.overlay').remove();
            $('.show-popup').remove();
            return false;
        });
        return false;
    });
    /**/
    $('.browse, .input-select').click(function(){
        $('input[name="'+$(this).attr('inputtype')+'"]').click();
        return false;
    });
    $('.payment-method .new-checkbox').click(function(){
        var $this_val = $(this).find('input').val();
        $('.pay-methods').hide();
        $('.'+$this_val+'-select').show();
        $('input[name="pay_method"]').val($this_val);
    });
    var step = 0;
    var error = 0;
    var nav = 1;
    $('body').on('click', '.btn-step', function(){
        var $this = $(this);
        if($(this).hasClass('ok-step-next')){
            step++;
            if(step >= 7){
                step = 6;
            }
            nav = 1;
        }else if($(this).hasClass('ok-step-back')){
            step--;
            if(step < 0){
                step = 0;
            }
            nav = 0;
        }
        if(step == 1 && nav == 1){
            var zipcodes = $('#zip-selected').val();
            if(zipcodes == ''){
                $('.next-error').html('Error: Please enter your zipcodes!').fadeIn(200);
                step = 0;
                error = 1;
            }else{
                $('.next-error').fadeOut(200);
                error = 0;
            }
        }else if(step == 4 && nav == 1) {
            if(error == 0){

                $.ajax({
                    url: $('#submit-form').attr('action'),
                    type: 'POST',
                    data: formData,//$('#submit-form').serialize(),data),
                    processData: false,
                    contentType: false,
                    success: function(data, textStatus, jqXHR){
                        console.log(textStatus);
                    }
                });
            }
        }
        
        /*else if(step == 2 && nav == 1){
			var price = $('input[name="price"]:checked:visible').length;
			console.log(price);
			if(price == 0){
				$('.next-error').html('Error: You must select at least one option!').fadeIn(200);
				step = 1;
				error = 1;
			}else{
				$('.next-error').fadeOut(200);
				error = 0;
			}
		}else if(step == 3 && nav == 1){
			var seasons = $('input[name="seasons[]"]:checked').size();
			if(seasons == 0){
				$('.next-error').html('Error: You must select at least one option!').fadeIn(200);
				step = 2;
				error = 1;
			}else{
				$('.next-error').fadeOut(200);
				error = 0;
			}
		}*/else if(step == 6 && nav == 1){
            if(error == 0){
            //$('#submit-form').submit();
            }
        }
        if(error == 0){
            var height = $('.form-step-'+(step+1)).outerHeight(true);
            $('.the-show').animate({
                'height': height
            }, 200);
            $('.form-step-'+step).stop().animate({
                'opacity': 0
            }, 400);
            $('.form-step-'+(step+1)).stop().animate({
                'opacity': 1
            }, 400);
            $('.step-next').removeClass('ok-step-next');
            $('.step-back').removeClass('ok-step-back');
            $('.sign-up-progress').stop().animate({
                'left': -step*1133
            }, 400, function(){
                $('.step-next').addClass('ok-step-next');
                $('.step-back').addClass('ok-step-back');
                if(nav == 1){
                    $('.step-progress').removeClass('step-'+step);
                    $('.step-progress').addClass('step-'+(step+1));
                }else{
                    $('.step-progress').removeClass('step-'+(step+2));
                    $('.step-progress').addClass('step-'+(step+1));
                }
            });
        }
        return false;
    });

    $('body').on('click', '.selecttype, .selecttype a', function(){
        var $this = $(this);
        if($this.attr('status') == 'close'){
            $this.attr('status', 'open');
            $('.selecttype ul').slideDown(120);
            $('.selecttype ul li').click(function(){
                var sl_txt = $(this).find('span').html(),
                sl_val = $(this).attr('value');
                $('.selecttype .placeholder').html(sl_txt);
                $('input[name="business_type"]').val(sl_val);
                $this.attr('status', 'close');
                $('.selecttype ul').slideUp(120);
                $('.show-cat-image').hide();
                $('.show-cat-image[type="'+sl_val+'"]').show().loopslider();
                return false;
            });
        }else{
            $this.attr('status', 'close');
            $('.selecttype ul').slideUp(120);
        }
        return false;
    }).on('click', ':not(.selecttype, .selecttype a)', function(){
        $('.selecttype').attr('status', 'close');
        $('.selecttype ul').slideUp(120);
    });
    $('.slider').loopslider();
    $('.show-cat-image').loopslider();
 
    // Add events
    $('input[type=file]').on('change', prepareUpload);
 
    // Grab the files and set them to our variable
    function prepareUpload(event)
    {
        files = event.target.files;

        $.each(files, function(key, value)
        {
            formData.append(key, value);
        });
    }

});