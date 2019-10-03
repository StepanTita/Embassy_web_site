class Control
{
    constructor()
    {
        this.menu_opened = false;
    }

    get menu_Opened()
    {
        return this.menu_opened;
    }
    set menu_Opened(val)
    {
        this.menu_opened = val;
    }
    control_rightMenu_visibility()
    {
        if(window.pageYOffset >= 100)
        {
            $('#theMenu')[0].style.visibility = 'visible';
            $('#theMenu')[0].style.opacity = '1';
        }
        else if(!this.menu_opened)
        {
            $('#theMenu')[0].style.visibility = 'hidden';
            $('#theMenu')[0].style.opacity = '0';
        }
    }

    menu_open_close()
    {
        $('#menuToggle').toggleClass('active');
        $('body').toggleClass('body-push-toleft');
        $('#theMenu').toggleClass('menu-open');
    }

    call_toggles()
    {
        //$('#anim').effect("shake", "down");
        $('#anim').toggleClass('rot');
        $(".tooltip").toggleClass("special");
        
    }
    support_open_close()
    {
        $('.material-button-toggle').toggleClass('open');
        $('.option').toggleClass('scale-on');
    }
}
