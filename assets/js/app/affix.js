define(["require","jquery","bootstrap"],function(e){

    var t=e("jquery"),
        n=e("bootstrap");

    t("[data-sidebar]").affix({offset:{top:80}});

    var r=t(document.body),
        i=t(".navbar").outerHeight(!0)+10;

    r.scrollspy({target:"[data-leftcol]",offset:i}),

    t("a[href*=#]:not([href=#])").click(function(){
        if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){
            var e=t(this.hash);
            e=e.length?e:t("[name="+this.hash.slice(1)+"]");
            if(e.length)
                return t("html,body").animate({scrollTop:e.offset().top-50},1e3),!1
        }
    })
});
