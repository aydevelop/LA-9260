$(document).ready(function(){
    
    $('#subscribe-form').submit(function(e){        
        e.preventDefault();

        let form = $(this);
        form.find('input[type="submit"]').prop('disabled', true);

        Stripe.card.createToken(form, function(status,res){
           

            console.log(JSON.stringify(res))

            if(res.error){
                 form.find('.stripe-errors').text(res.error.message);
                 form.find('input[type="submit"]').prop('disabled', false);
            }
            else{
                 let id = res.id;
                 console.log(1);
                 let inp = '<input type="hidden" value="'+id+'" name="cc_token">';
                 console.log(2);
                 form.append(inp);
                 console.log(3);
                 form.get(0).submit();
             }

        });
    })
});