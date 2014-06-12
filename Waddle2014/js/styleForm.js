var $submit = $(".submit input");
var $required = $(".required");

function containsBlanks(){
    var blanks = $required.map(function(){ 
    return $(this).val() == "";});
    return $.inArray(true, blanks) != -1;
}

function requiredFilledIn(){
    if(containsBlanks() || !$("#email").validEmail()) 
        $submit.attr("disabled","disabled");
    else 
        $submit.removeAttr("disabled");
}

$("form table tr td span").hide();
$("input,textarea").focus(function(){
    $(this).next().fadeIn("slow");
    }).blur(function(){
    $(this).next().fadeOut("slow");
    }).keyup(function(){
    //Check all required fields.
    requiredFilledIn();
    });

$("#email").validEmail({on:"keyup", success:function(){
    $(this).next().removeClass("error").addClass("valid");
}, failure:function(){
    $(this).next().removeClass("valid").addClass("error");
}});

requiredFilledIn();