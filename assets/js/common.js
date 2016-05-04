$('document').ready(function () {
    var showAuthorInfo = function () {
        console.log("showAuthorInfo");
        new Vue({
            el: '.app',
            data: {
                message: 'Hello Vue.js!'
            }
        });
    };
    var listBooks = function () {
        console.log("listBooks");
    };

    var allroutes = function () {
        var route = window.location.hash.slice(2);
        var sections = $('section');
        var section;

        section = sections.filter('[data-route=' + route + ']');
        if (section.length) {
            sections.hide(200);
            section.show(200);
        }else{
            console.log("not found.");
        }
    };

    //
    // define the routing table.
    //
    var routes = {
        '/author': showAuthorInfo,
        '/books': listBooks
    };

    //
    // instantiate the router.
    //
    var router = Router(routes);

    //
    // a global configuration setting.
    //
    router.configure({
        on: allroutes
    });

    router.init();
});
