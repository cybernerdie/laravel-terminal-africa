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
        { text: "Home", link: "/index.html" },
        { text: "Installation", link: "/getting-started/installation.html" },
        { text: "API Documentation", link: "https://docs.terminal.africa/tship/?utm_source=null" },
        { text: "Github", link: "https://github.com/cybernerdie/laravel-terminal-africa" }
      ],

      // Social Icons
      socialLinks: [
        { icon: "github", link: "https://github.com/cybernerdie" },
        { icon: "twitter", link: "https://twitter.com/cybernerdie" }
      ],

      // Sidebar
      sidebar: [
        {
          text: "INTRODUCTION",
          collapsible: true,
          items: [
            { text: "Installation", link: "/getting-started/installation.html" },
            { text: "Usage", link: "/getting-started/usage.html" },
        ],
        },

        {
          text: "API ENDPOINTS",
          collapsible: true,
          items: [
            { text: "Addresses", link: "/address/index.html"},
            { text: "Carriers", link: "/carrier/index.html" },
            { text: "Claims", link: "/claim/index.html" },
            { text: "Insurance", link: "/insurance/index.html" },
            { text: "Packaging", link: "/packaging/index.html" },
            { text: "Parcels", link: "/parcel/index.html" },
            { text: "Rates", link: "/rate/index.html" },
            { text: "Shipments", link: "/shipment/index.html" },
            { text: "Transactions", link: "/transaction/index.html" },
            { text: "Miscellaneous", link: "/miscellaneous/index.html" },
            { text: "Webhooks", link: "/webhook/index.html" },
            { text: "Location", link: "/location/index.html" },
          ],
        }

      ],

      // define a custom link resolver function
      linkResolver: (page, pages) => {
          // find the index of the current page in the pages array
          const currentPageIndex = pages.findIndex(p => p.path === page.path)

          // find the next page based on the order of the items in the sidebar
          for (let i = 0; i < sidebar.length; i++) {
            const item = sidebar[i]
            for (let j = 0; j < item.items.length; j++) {
              const nextItem = item.items[j]
              if (nextItem.link && nextItem.link.startsWith("/") && nextItem.link !== page.path) {
                const nextPage = pages.find(p => p.path === nextItem.link)
                const nextPageIndex = pages.findIndex(p => p.path === nextPage.path)
                if (nextPageIndex > currentPageIndex) {
                  return nextPage.path
                }
              }
            }
          }

          // if no next page is found, return null
          return null
        },

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
