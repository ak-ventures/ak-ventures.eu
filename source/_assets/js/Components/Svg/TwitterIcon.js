export default {
    functional: true,
    render: function(createElement, context) {
        return createElement("svg", {
            attrs: {
                version: "1.1",
                xmlns: "http://www.w3.org/2000/svg",
                viewBox: "0 0 24 24",
                "xmlns:xlink": "http://www.w3.org/1999/xlink",
                style: "fill: currentColor;",
                "xml:space": "preserve"
            },
            class: context.data.staticClass,
            domProps: {
                innerHTML: `
                <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/>
                    `
            }
        });
    }
};
