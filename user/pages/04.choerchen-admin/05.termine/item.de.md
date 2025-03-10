---
title: 'Termine'
cache_enable: false
content:
    items:
        - '@page.children': /choerchen-intern/termine
        #- '@self.children'
    dateRange:
        start: 'today'
        #end: 'next week'
        end: 'next month'
        #end: '2026-12-12'
    order:
        by: date
        dir: asc
permissions:
    inherit: true
taxonomy:
    category:
        - admin
simple-responsive-tables:
    active: true
tablesorter:
    active: true
    themes: green
    table_nums: '1,2'


---

| | a | b |
|-------|-------|-------|
| **1** | _2_ | <mark> 2 </mark> | 


<span class="h2">Termine</span>

[ choerchen-events events="/choerchen-intern/termine" start="today" end="next year" limit=4 ]


[ choerchen-events-table ]
