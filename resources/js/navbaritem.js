const adminmenu = [
    {
        name: "Posts",
        route: "postIndex",

        submenu: [
            {
                name: "All Post",
                route: "postList",
            },
            {
                name: "Add New",
                route: "postAdd",
            }

        ]

    },
    {
        name: "Pages",
        route: "pageIndex",
        submenu: [
            {
                name: "All Page",
                route: "pageList",
            },
            {
                name: "Add New",
                route: "pageAdd",
            }

        ]

    }
]


export default adminmenu
