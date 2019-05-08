jQuery(document).ready( function($){


$(document).on('click','.sunset-load-more', function(){

// this refers to the button itself
var that = $(this);
// reference to the data-page attribute value of the button
var page = $(this).data('page');
// next page reference
var newPage = page+1;
// reference to the data-url attribute value of the button
var ajaxurl = that.data('url');


$.ajax({
    
    url : ajaxurl,
    type : 'post', // post method of retriving data
    data : {
        
        page : page,
        action: 'sunset_load_more'
        
    },
    error : function( response ){
        console.log(response);
    },
    success : function( response ){
        
        that.data('page', newPage);
        $('.sunset-posts-container').append( response );
        
    }
    
});


});



});