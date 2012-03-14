 $(document).ready(function() {
    $('#nav > li').hover(function() {
	$(this).find('ul').slideDown('medium', function(){});
    }, 
    function() {
	$(this).find('ul').slideUp('fast', function(){});
    });
    
    $('#a').click(function(){
        alert('Hello')
    });
});