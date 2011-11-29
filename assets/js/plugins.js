// Default Boilerplate
window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){arguments.callee=arguments.callee.caller;var a=[].slice.call(arguments);(typeof console.log==="object"?log.apply.call(console.log,console,a):console.log.apply(console,a))}};
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());

// Lightbox plugin
$.minimalLightbox = function(el, options) {
        // To avoid scope issues, use 'base' instead of 'this'
        // to reference this class from internal events and functions.
        var base = this;

        // Access to jQuery and DOM versions of element
        base.$el = $(el);
        base.el = el;

        // Add a reverse reference to the DOM object
        base.$el.data("minimalLightbox", base);

        base.init = function(){
            //if( typeof( radius ) === "undefined" || radius === null ) radius = "20px";
            //base.radius = radius;

            base.options = $.extend({},$.minimalLightbox.defaultOptions, options);

            // Put your initialization code here
        };

        // Sample Function, Uncomment to use
        // base.functionName = function(paramaters){
        //
        // };

        // Run initializer
        base.init();
    };

    $.minimalLightbox.defaultOptions = {
        //radius: "20px"
    };

    $.fn.minimalLightbox = function(radius, options){
        return this.each(function() {
            (new $.minimalLightbox(this, options));

                   // HAVE YOUR PLUGIN DO STUFF HERE

                   // END DOING STUFF

        });
    };