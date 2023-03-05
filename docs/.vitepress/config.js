export default {
  title: "Laravel Terminal Africa",
  description: "Documentation for integrating the Laravel Terminal Africa Package",

  head: [
    ['link', { rel: 'icon', href: '/icon.ico' }],
    ['link', { rel: 'stylesheet', href: '../theme/custom.css' }]
  ],

  themeConfig: {
    logo: "/logo.png",
    siteTitle: "Laravel Terminal Africa",

    // Navbar Link
    nav: [
      { text: "Home", link: "/index" },
      { text: "Installation", link: "/getting-started/installation" },
      { text: "API Documentation", link: "https://docs.terminal.africa/tship/?utm_source=null" },
      { text: "Github", link: "https://github.com/cybernerdie/laravel-terminal-africa" }
    ],

    // Social Icons
    socialLinks: [
      { icon: "github", link: "github.com/cybernerdie" },
      { icon: "twitter", link: "https://twitter.com/cybernerdie" }
    ],
    
    // Sidebar
    sidebar: [
      {
        text: "INTRODUCTION",
        collapsible: true,
        items: [
          { text: "Installation", link: "/getting-started/installation" },
        ],
      },
      
      {
        text: "API ENDPOINTS",
        collapsible: true,
        items: [
          { text: "Addresses", link: "/address/index"},
          { text: "Carriers", link: "/carrier/index" },
          { text: "Claims", link: "/claim/index" },
          { text: "Insurance", link: "/insurance/index" },
          { text: "Packaging", link: "/packaging/index" },
          { text: "Parcels", link: "/parcel/index" },
          { text: "Rates", link: "/rate/index" },
          { text: "Shipments", link: "/shipment/index" },
          { text: "Transactions", link: "/transaction/index" },
          { text: "Miscellaneous", link: "/miscellaneous/index" },
        ],
      }
    ],

    footer: {
      message: "Released under the MIT License.",
      copyright: "Copyright © 2022-present Adocs",
    },

    markdown: {
      theme: "material-palenight",
      lineNumbers: true,
    },
  },
};
