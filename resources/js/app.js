import './bootstrap';


window.Echo.channel('chat')
    .listen('App\\Events\\MessageSent', (e) => {
        console.log(e);

});


