jQuery(document).ready(function($) {
    
    let pgid = my_script_vars.postID;
    if (pgid == '1311'){
        $("#nave").attr("data-style" , "dark");
        $("#nave").attr("data-position" , "absolute"); 
    }else{
        $("#nave").attr("data-style" , "light");
        $("#nave").attr("data-position" , "relative"); 
    }
});
