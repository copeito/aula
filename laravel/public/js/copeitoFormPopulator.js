class copeitoFormPopulator
{
    static populateElement(src)
    {
        $('<div>').insertBefore($(src));
        $('<div>').insertAfter($(src));

        $(src).attr('name', $(src).attr('id'));

        if ($(src).attr('type') == undefined){
            $(src).attr(
                'type',
                ($(src).is(":button")) ? 'submit' : 'text'
            );
        }

        if ($(src).attr('label')){
            $('<label for="'+$(src).attr('id')+'">'+$(src).attr('label')+'</label>').insertBefore($(src));
            $(src).removeAttr('label');
        }

        if ($(src).attr('help')){
            var idHelper = $(src).attr('id')+'HelpBlock';

            $(src).attr('aria-describedby', idHelper);

            $('<small id="'+idHelper+'">'+$(src).attr('help')+'</small>').insertAfter($(src));

            $(src).removeAttr('help');
        }

        if ($(src).attr('msgOnInvalid')){
            $(src).attr('oninvalid', 'this.setCustomValidity("'+$(src).attr('msgOnInvalid')+'")');
            $(src).removeAttr('msgOnInvalid');
        }

        switch(($(src).attr('type'))){
            case 'text':
            case 'email':
            case 'tel':
                $(src).attr('maxlength','191');
                break;
        }

        if ($(src).attr('required') && ($(src).attr('type') == 'text')){
            $(src).attr('onchange', 'this.setCustomValidity("")');
        }
    }

    static populateAll()
    {
        $('form input, form button').each(function (){
            copeitoFormPopulator.populateElement($(this));
        });
    }
}
