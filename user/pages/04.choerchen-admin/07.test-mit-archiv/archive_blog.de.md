---
title: 'Test mit Archiv'
body_classes: 'title-center title-h1h2'
cache_enable: false
content:
    items:
        - '@page.children': /home
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
login:
    visibility_requires_access: true
permissions:
    inherit: true
archivetype: 'news'
archivesched: '-7days'
archivedate: 'eventdate'
---

ein test blog mit Archiv