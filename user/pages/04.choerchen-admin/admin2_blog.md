---
title: Admin
content:
    items:
        '@taxonomy':
            category:
                - admin
    limit: 6
    order:
        by: folder
        dir: asc
    pagination: true
    sidebar: true
    url_taxonomy_filters: true
login:
    visibility_requires_access: true
access:
    admin.super: true
permissions:
    inherit: true
    authors:
        - admin
    groups:
        Administratoren:
            create: true
            read: true
            update: true
            delete: true
        Choerchenadmin:
            delete: false
            create: false
            update: false
            read: false
admin: {  }
cache_enable: false
visible: true
star-ratings:
    star_size: 20
    total_stars: 5
---

Admin page