requirejs.config({
    baseUrl: '/',
    urlArgs: 'bust=0',
    paths: {
        app: 'js/app',
        lib: 'gintonic_c_m_s/js/lib',
        gintonic: 'gintonic_c_m_s/js',
        react: 'vendor/react/react',
        JSXTransformer: 'gintonic_c_m_s/js/lib/jsx-requirejs-plugin/JSXTransformer',
        jsx: 'gintonic_c_m_s/js/lib/jsx-requirejs-plugin/jsx',
        text: 'gintonic_c_m_s/js/lib/requirejs-text/text',
        jquery: 'vendor/jquery/dist/jquery',
        bootstrap: 'vendor/bootstrap/dist/js/bootstrap',
        jqueryvalidate: '//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min',
        slimscroll: '//cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.3/jquery.slimscroll.min',
        prettify: '//cdn.rawgit.com/google/code-prettify/master/loader/run_prettify',
        'admin-theme': 'vendor/admin-theme/webroot',
        'admin-lte': 'vendor/admin-lte/dist/js/app',
        fontawesome: 'vendor/fontawesome/fonts/*',
        ionicons: 'vendor/ionicons/fonts/*',
        'gintonic-cms': 'vendor/gintonic-cms/webroot',
        'jsx-requirejs-plugin': 'vendor/jsx-requirejs-plugin/js/jsx',
        'requirejs-text': 'vendor/requirejs-text/text',
        'twbs-theme': 'vendor/twbs-theme/webroot'
    },
    jsx: {
        fileExtension: '.jsx'
    },
    shim: {
        slimscroll: {
            deps: [
                'jquery'
            ],
            exports: 'slimscroll'
        },
        bootstrap: [
            'jquery'
        ],
        jqueryvalidate: [
            'jquery'
        ],
        wysiwyg: [
            'jquery'
        ],
        stripe: [
            'jquery'
        ]
    },
    packages: [

    ]
});
