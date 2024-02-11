---
title: Home
body_classes: 'title-center title-h1h2'
cache_enable: false
content:
    items:
        - '@self.children'
    limit: 6
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: false
permissions:
    groups:
        Administratoren:
            create: true
            read: true
            update: true
            delete: true
        Choerchenadmin:
            create: false
            read: true
            update: false
            delete: false
archivetype: news
archivesched: '-30days'
archivedate: eventdate
dateformat: 'd-m-Y H:i'
---

<span class="h1">Das Chörchen</span> <sub>Diedersdorf / Dahlewitz</sub>

===


