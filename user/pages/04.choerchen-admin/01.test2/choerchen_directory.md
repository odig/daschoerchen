---
title: test2
onpage_menu: true
onlyroute: true
content:
    items:
        - '@self.children'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
directorylisting:
    level: 5
    exclude_main: true
    exclude_modular: false
    include_additional:
        - choerchen-intern/choerchen-noten
    exclude_additional:
        - das-choerchen
visible: false
login:
    visibility_requires_access: true
permissions:
    inherit: true
routable: true
cache_enable: true
taxonomy:
    category:
        - adminbuthidden
---

test2

