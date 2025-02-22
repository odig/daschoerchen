---
title: Termine
onpage_menu: true
content:
    items:
        - '@self.children'
    limit: 30
    order:
        by: event.start
        dir: asc
    pagination: true
    url_taxonomy_filters: true
visible: false
login:
    visibility_requires_access: true
permissions:
    inherit: true
cache_enable: true
published: false
routable: true
taxonomy:
    category:
        - hidden
---

