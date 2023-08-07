---
title: Admin
content:
    items:
     '@taxonomy':
      category: [admin]
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
admin: {  }
cache_enable: false
visible: true
---

Admin page