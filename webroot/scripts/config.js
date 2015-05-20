requirejs.config({
    baseUrl: '/',
    urlArgs: "bust=0",
    paths: {
        // Paths
        app: 'js/app',
        lib: 'js/lib',
        gintonic:   'gintonic_c_m_s/js',
         
        // Utilities
        messages: 'gintonic_c_m_s/js/messages',
        albums: 'gintonic_c_m_s/js/albums',
        users: 'gintonic_c_m_s/js/users',
        admin: 'gintonic_c_m_s/js/admin',
        files: 'gintonic_c_m_s/js/files',
        
        // Gintonic Libs
        wysiwyg: 'gintonic_c_m_s/js/lib/bootstrap-wysiwyg',
        
        // Libs
        jquery: '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min',
        bootstrap: '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min',
        jqueryvalidate: '//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min',
        slimscroll: '//cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.3/jquery.slimscroll.min',
        prettify: '//cdn.rawgit.com/google/code-prettify/master/loader/run_prettify'
    },
    shim: {
        slimscroll :  {
            deps: ["jquery"],
            exports: 'slimscroll'
        },
        bootstrap : ["jquery"],
        jqueryvalidate : ["jquery"],
        wysiwyg : ["jquery"],
    }
});
