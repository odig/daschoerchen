---
title: 'Test mit Archiv'
content:
    items:
        - '@self.children'
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
archivesched: '-2days'
---

ein test blog mit Archiv