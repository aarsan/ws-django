<script>
    jQuery('document').ready(function($){
        
        $('a.ajax_link').click(function(){
            $.ajax({
                type: '<?php echo $type; ?>',
                url: '<?php echo $url; ?>',

                success: function(data){
                    
                    var data = $('<div>').html(data);
                    var msg1 = data.find('#msg1');

                    $('#data_box1').html(msg1).hide().fadeIn(500).delay(2000).fadeOut(500);
                    setTimeout('window.location.href =\"/groups/\"',3000);
                }
            });

        });
    });
</script>