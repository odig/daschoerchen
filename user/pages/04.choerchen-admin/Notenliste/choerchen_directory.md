---
title: Notenliste
onpage_menu: true
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
    exclude_modular: true
    links: true
    route: '/choerchen-intern/choerchennoten'
    include_additional:
        - choerchen-intern/choerchen-noten
    exclude_additional:
        - Archiv
        - archiv
        - Ytlinks
        - ytlinks
visible: true
login:
    visibility_requires_access: true
permissions:
    inherit: true
cache_enable: true
published: true
routable: true

---

