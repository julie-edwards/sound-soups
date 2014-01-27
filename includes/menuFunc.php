<!-- start menu page footer include -->
<script src="js/togglator.js"></script>
<script>
    //MENU PAGE SCRIPTS
    
    //launch togglator for menu details
    $(document).ready(function(){
        $('.details').togglate({
             rotateArrow  :  false,
             animateArrow  :  false,      
             defaultTitle  :  "Details" 
       });
    })

    // prepare soup details layout
    $(document).ready(function() {
        //add nutrition types and units and align columns
        $(".details").prepend("<p>An 8 oz serving contains:</p>");
        $(".details p:last-child").prepend("Ingredients: ");
        $(".details li:first-child").prepend("Calories: ");
        $(".details li:nth-child(2)").prepend("Carbohydrates: ").append(' g').addClass('col2');
        $(".details li:nth-child(3)").prepend("Protein: ").append(' g');
        $(".details li:nth-child(4)").prepend("Fat: ").append(' g').addClass('col2');
        $(".details li:nth-child(5)").prepend("Cholesterol: ").append(' mg');
        $(".details li:nth-child(6)").prepend("Sodium: ").append(' mg').addClass('col2');
        $(".details li:nth-child(7)").prepend("Fiber: ").append(' g');
    });

    //launch responsive nav with togglator
    $(document).ready(function(){
        $('#menu-menu').togglate({
            arrow  :  false,
            defaultTitle  :  ""
       });
    })
    
    // set up responsive nav functionality
    $(document).ready(function() {
        $('h2 + .togglator .togglator-title').addClass('open');
        if ($(window).width() <= 699) {
            $('#menu-menu').hide();
        }
        if ($(window).width() > 699) {
            $('#menu-menu').show();
        }
        $('.nav').show();
    });     
    $(window).resize(function() {
        if ($(window).width() > 699) {
            $('#menu-menu').show();
        }
        if ($(window).width() <= 699) {
            $('div.open+#menu-menu').hide();
        }
    });

    //to-top link
    $(document).ready(function() {
        var top = $('#to-top');
        top.hide;
        $(window).scroll(function() {
            if($(this).scrollTop() > 300) {
                top.fadeIn(400);    
            } else {
                top.fadeOut(400);
            }
        });
     
        top.click(function() {
            $('body,html').scrollTop(0);
        }); 
    });
</script>
<!-- end menu page footer include -->