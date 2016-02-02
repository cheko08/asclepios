$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#menu1"); //Fields wrapper
    var add_button      = $("#add_field_button1"); //Add button ID
    
    var x = 3; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group"><label for="alimento" class="control-label">Alimento '+x+'</label><input type="text" name="alimento_1[]" class="form-control"><a href="#" id="remove_field1"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Remover</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click","#remove_field1", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#menu2"); //Fields wrapper
    var add_button      = $("#add_field_button2"); //Add button ID
    
    var x = 3; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group"><label for="alimento" class="control-label">Alimento '+x+'</label><input type="text" name="alimento_2[]" class="form-control"><a href="#" id="remove_field2"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Remover</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click","#remove_field2", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#menu3"); //Fields wrapper
    var add_button      = $("#add_field_button3"); //Add button ID
    
    var x = 3; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group"><label for="alimento" class="control-label">Alimento '+x+'</label><input type="text" name="alimento_3[]" class="form-control"><a href="#" id="remove_field3"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Remover</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click","#remove_field3", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#menu4"); //Fields wrapper
    var add_button      = $("#add_field_button4"); //Add button ID
    
    var x = 3; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group"><label for="alimento" class="control-label">Alimento '+x+'</label><input type="text" name="alimento_4[]" class="form-control"><a href="#" id="remove_field4"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Remover</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click","#remove_field4", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#menu5"); //Fields wrapper
    var add_button      = $("#add_field_button5"); //Add button ID
    
    var x = 3; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group"><label for="alimento" class="control-label">Alimento '+x+'</label><input type="text" name="alimento_5[]" class="form-control"><a href="#" id="remove_field5"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Remover</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click","#remove_field5", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#menu6"); //Fields wrapper
    var add_button      = $("#add_field_button6"); //Add button ID
    
    var x = 3; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group"><label for="alimento" class="control-label">Alimento '+x+'</label><input type="text" name="alimento_6[]" class="form-control"><a href="#" id="remove_field6"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Remover</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click","#remove_field6", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#menu7"); //Fields wrapper
    var add_button      = $("#add_field_button7"); //Add button ID
    
    var x = 3; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="form-group"><label for="alimento" class="control-label">Alimento '+x+'</label><input type="text" name="alimento_7[]" class="form-control"><a href="#" id="remove_field7"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Remover</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click","#remove_field7", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});