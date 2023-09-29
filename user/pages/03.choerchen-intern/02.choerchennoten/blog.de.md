---
title: Chörchennoten
use_taxonomy: true
use_simplesearch: true
simplesearch:
    process: true
    route: @self
    filters:
        category:
            - Noten
    filter_combinator: and
    template: choerchen_results
content:
    items:
        - '@self.children'
    limit: 10
    order:
        by: title
        dir: desc
    pagination: true
    url_taxonomy_filters: true
login:
    visibility_requires_access: true
access:
    site.login: true
permissions:
    inherit: true
show_pagination: true
blog_url: /blog
visible: false
taxonomy:
    category:
        - intern
addtag_allenoten: true
---

<span class="h2">Chörchennoten</span> <sub>Das Repertoire</sub>

===

Das Repertoire