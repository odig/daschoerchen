---
title: Gemeindelieder
use_taxonomy: true
use_simplesearch: true
simplesearch:
    process: true
    route: @self
    filters:
        category:
            - Lieder
    filter_combinator: and
    template: choerchenlieder_results
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

<span class="h2">Gemeindelieder</span> <sub>Lieder aus den Gesangbüchern</sub>

===

Lieder aus den Gesangbüchern